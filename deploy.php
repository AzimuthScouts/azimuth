<?php
namespace Deployer;

use function Clue\StreamFilter\fun;

require 'recipe/common.php';

$env = 'prod2';
$hostname = 'www192.your-server.de';

// Project name
set('application', 'Azimuth');

// Project repository
set('repository', 'https://github.com/sedlacek-martin/azimuth.git');

// [Optional] Allocate tty for git clone. Default value is false.
set('git_tty', false);

set('default_timeout', 2000);
set('http_user', 'azimutu');

// Shared files/dirs between deploys
add('shared_files', ['app/config/parameters.yml']);
add('shared_dirs', ['var/log', 'var/sessions', 'web/media', 'web/uploads', 'web/json']);

set('clear_paths', ['.github/', 'doc/', '.gitignore', 'docker/']);

// Writable dirs by web server
//add('writable_dirs', []);

set('allow_anonymous_stats', false);


// Hosts

host('prod')
    ->hostname($hostname)
    ->user('azimutu')
    ->port(222)
    ->forwardAgent(true)
    ->multiplexing(false)
    ->set('deploy_path', "/usr/home/azimutu/public_html/{$env}")
    ->set('keep_releases', 3);
    
// Tasks

task('deploy', [
    'deploy:info',
    'deploy:prepare',
    'deploy:lock',
    'deploy:release',
    'deploy:update_code',
    'deploy:shared',
    'prod_index',
    'composer',
    'assets',
    'translations',
    'deploy:writable',
    'deploy:symlink',
    'deploy:unlock',
    'cleanup',
    'success'
]);

task('composer', function () use ($env) {
    cd('{{release_path}}');
    run("php /usr/home/azimutu/public_html/composer.phar install --no-interaction -d /usr/home/azimutu/public_html/{$env}/release");
    run("php /usr/home/azimutu/public_html/composer.phar dump-autoload --optimize --classmap-authoritative --no-interaction -d /usr/home/azimutu/public_html/{$env}/release");
});

task('migration', function () use ($env) {
    run("/usr/home/azimutu/public_html/{$env}/release/bin/console doctrine:migrations:migrate -n");
});

task('assets', function () use ($env) {
    run("/usr/home/azimutu/public_html/{$env}/release/bin/console ckeditor:install");
    run("/usr/home/azimutu/public_html/{$env}/release/bin/console assets:install --symlink");
    run("/usr/home/azimutu/public_html/{$env}/release/bin/console assetic:dump");
});

task('prod_index', function () use ($env) {
   run("mv /usr/home/azimutu/public_html/{$env}/release/web/app_prod.php /usr/home/azimutu/public_html/{$env}/release/web/app.php");
});

task('translations', function () use ($env) {
    cd("/usr/home/azimutu/public_html/{$env}/release/vendor/jms/translation-bundle/JMS/TranslationBundle/Resources/views");
    run("ln -s Translate translate");
    cd("/usr/home/azimutu/public_html/{$env}/release/");
    run("/usr/home/azimutu/public_html/{$env}/release/bin/console translation:extract en --config=cocorico");
});

// If deploy fails automatically unlock.
after('deploy:failed', 'deploy:unlock');


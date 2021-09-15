<?php declare(strict_types = 1);

namespace Application\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20210817193245 extends AbstractMigration
{
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE booking CHANGE new_booking_at new_booking_at DATETIME DEFAULT NULL, CHANGE payed_booking_at payed_booking_at DATETIME DEFAULT NULL, CHANGE refused_booking_at refused_booking_at DATETIME DEFAULT NULL, CHANGE canceled_asker_booking_at canceled_asker_booking_at DATETIME DEFAULT NULL, CHANGE createdAt createdAt DATETIME DEFAULT NULL, CHANGE updatedAt updatedAt DATETIME DEFAULT NULL');
        $this->addSql('ALTER TABLE booking_bank_wire CHANGE payed_at payed_at DATETIME DEFAULT NULL, CHANGE createdAt createdAt DATETIME DEFAULT NULL, CHANGE updatedAt updatedAt DATETIME DEFAULT NULL');
        $this->addSql('ALTER TABLE booking_payin_refund CHANGE payed_at payed_at DATETIME DEFAULT NULL, CHANGE createdAt createdAt DATETIME DEFAULT NULL, CHANGE updatedAt updatedAt DATETIME DEFAULT NULL');
        $this->addSql('ALTER TABLE booking_user_address CHANGE createdAt createdAt DATETIME DEFAULT NULL, CHANGE updatedAt updatedAt DATETIME DEFAULT NULL');
        $this->addSql('ALTER TABLE country_information CHANGE country country VARCHAR(3) DEFAULT NULL');
        $this->addSql('ALTER TABLE listing CHANGE location_id location_id INT DEFAULT NULL, CHANGE type type SMALLINT DEFAULT NULL, CHANGE certified certified TINYINT(1) DEFAULT NULL, CHANGE min_duration min_duration SMALLINT DEFAULT NULL, CHANGE max_duration max_duration SMALLINT DEFAULT NULL, CHANGE average_rating average_rating SMALLINT DEFAULT NULL, CHANGE comment_count comment_count INT DEFAULT NULL, CHANGE admin_notation admin_notation NUMERIC(3, 1) DEFAULT NULL, CHANGE availabilities_updated_at availabilities_updated_at DATETIME DEFAULT NULL, CHANGE createdAt createdAt DATETIME DEFAULT NULL, CHANGE updatedAt updatedAt DATETIME DEFAULT NULL');
        $this->addSql('ALTER TABLE listing_category CHANGE parent_id parent_id INT DEFAULT NULL, CHANGE category_pin_id category_pin_id INT DEFAULT NULL, CHANGE root root INT DEFAULT NULL');
        $this->addSql('ALTER TABLE listing_category_translation CHANGE translatable_id translatable_id INT DEFAULT NULL, CHANGE slug slug VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE listing_characteristic_group_translation CHANGE translatable_id translatable_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE listing_characteristic_translation CHANGE translatable_id translatable_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE listing_characteristic_value_translation CHANGE translatable_id translatable_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE listing_listing_characteristic CHANGE listing_characteristic_value_id listing_characteristic_value_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE listing_location CHANGE listing_id listing_id INT DEFAULT NULL, CHANGE zip zip VARCHAR(20) DEFAULT NULL, CHANGE route route VARCHAR(120) DEFAULT NULL, CHANGE street_number street_number VARCHAR(20) DEFAULT NULL');
        $this->addSql('ALTER TABLE listing_translation CHANGE translatable_id translatable_id INT DEFAULT NULL, CHANGE slug slug VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE member_organization CHANGE country country VARCHAR(3) DEFAULT NULL, CHANGE abstract abstract VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE verified_domain CHANGE memberOrganization_id memberOrganization_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE geo_area CHANGE geocoding_id geocoding_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE geo_area_translation CHANGE translatable_id translatable_id INT DEFAULT NULL, CHANGE slug slug VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE geo_city CHANGE geocoding_id geocoding_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE geo_city_translation CHANGE translatable_id translatable_id INT DEFAULT NULL, CHANGE slug slug VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE geo_coordinate CHANGE area_id area_id INT DEFAULT NULL, CHANGE department_id department_id INT DEFAULT NULL, CHANGE city_id city_id INT DEFAULT NULL, CHANGE zip zip VARCHAR(30) DEFAULT NULL, CHANGE route route VARCHAR(200) DEFAULT NULL, CHANGE street_number street_number VARCHAR(20) DEFAULT NULL, CHANGE createdAt createdAt DATETIME DEFAULT NULL, CHANGE updatedAt updatedAt DATETIME DEFAULT NULL');
        $this->addSql('ALTER TABLE geo_country CHANGE geocoding_id geocoding_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE geo_country_translation CHANGE translatable_id translatable_id INT DEFAULT NULL, CHANGE slug slug VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE geo_department CHANGE geocoding_id geocoding_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE geo_department_translation CHANGE translatable_id translatable_id INT DEFAULT NULL, CHANGE slug slug VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE user ADD location VARCHAR(100) DEFAULT NULL, CHANGE salt salt VARCHAR(255) DEFAULT NULL, CHANGE last_login last_login DATETIME DEFAULT NULL, CHANGE confirmation_token confirmation_token VARCHAR(180) DEFAULT NULL, CHANGE password_requested_at password_requested_at DATETIME DEFAULT NULL, CHANGE phone_prefix phone_prefix VARCHAR(6) DEFAULT NULL, CHANGE phone phone VARCHAR(16) DEFAULT NULL, CHANGE country_of_residence country_of_residence VARCHAR(3) DEFAULT NULL, CHANGE profession profession VARCHAR(50) DEFAULT NULL, CHANGE iban iban VARCHAR(45) DEFAULT NULL, CHANGE bic bic VARCHAR(25) DEFAULT NULL, CHANGE bank_owner_name bank_owner_name VARCHAR(100) DEFAULT NULL, CHANGE bank_owner_address bank_owner_address VARCHAR(255) DEFAULT NULL, CHANGE annual_income annual_income NUMERIC(10, 2) DEFAULT NULL, CHANGE email_verified email_verified TINYINT(1) DEFAULT NULL, CHANGE id_card_verified id_card_verified TINYINT(1) DEFAULT NULL, CHANGE trusted trusted TINYINT(1) DEFAULT NULL, CHANGE trusted_email_sent trusted_email_sent TINYINT(1) DEFAULT NULL, CHANGE nb_bookings_offerer nb_bookings_offerer SMALLINT DEFAULT NULL, CHANGE nb_bookings_asker nb_bookings_asker SMALLINT DEFAULT NULL, CHANGE fee_as_asker fee_as_asker SMALLINT DEFAULT NULL, CHANGE fee_as_offerer fee_as_offerer SMALLINT DEFAULT NULL, CHANGE average_rating_as_asker average_rating_as_asker SMALLINT DEFAULT NULL, CHANGE average_rating_as_offerer average_rating_as_offerer SMALLINT DEFAULT NULL, CHANGE mother_tongue mother_tongue VARCHAR(5) DEFAULT NULL, CHANGE answer_delay answer_delay INT DEFAULT NULL, CHANGE skaut_is_id skaut_is_id VARCHAR(100) DEFAULT NULL, CHANGE createdAt createdAt DATETIME DEFAULT NULL, CHANGE updatedAt updatedAt DATETIME DEFAULT NULL, CHANGE slug slug VARCHAR(255) DEFAULT NULL, CHANGE organizationIdentifier organizationIdentifier VARCHAR(50) DEFAULT NULL, CHANGE memberOrganization_id memberOrganization_id INT DEFAULT NULL, CHANGE scout_since scout_since INT DEFAULT NULL, CHANGE country country VARCHAR(3) DEFAULT NULL');
        $this->addSql('ALTER TABLE user_address CHANGE address address VARCHAR(255) DEFAULT NULL, CHANGE city city VARCHAR(255) DEFAULT NULL, CHANGE zip zip VARCHAR(50) DEFAULT NULL, CHANGE country country VARCHAR(3) DEFAULT NULL, CHANGE createdAt createdAt DATETIME DEFAULT NULL, CHANGE updatedAt updatedAt DATETIME DEFAULT NULL');
        $this->addSql('ALTER TABLE user_facebook CHANGE user_id user_id INT DEFAULT NULL, CHANGE birthday birthday DATE DEFAULT NULL, CHANGE address address VARCHAR(255) DEFAULT NULL, CHANGE verified verified VARCHAR(100) DEFAULT NULL, CHANGE location location VARCHAR(100) DEFAULT NULL, CHANGE location_id location_id VARCHAR(100) DEFAULT NULL, CHANGE hometown hometown VARCHAR(100) DEFAULT NULL, CHANGE hometown_id hometown_id VARCHAR(100) DEFAULT NULL, CHANGE gender gender VARCHAR(20) DEFAULT NULL, CHANGE locale locale VARCHAR(50) DEFAULT NULL, CHANGE timezone timezone VARCHAR(100) DEFAULT NULL, CHANGE nb_friends nb_friends VARCHAR(15) DEFAULT NULL, CHANGE picture picture VARCHAR(100) DEFAULT NULL, CHANGE createdAt createdAt DATETIME DEFAULT NULL, CHANGE updatedAt updatedAt DATETIME DEFAULT NULL');
        $this->addSql('ALTER TABLE user_translation CHANGE translatable_id translatable_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE page CHANGE published published TINYINT(1) DEFAULT NULL, CHANGE createdAt createdAt DATETIME DEFAULT NULL, CHANGE updatedAt updatedAt DATETIME DEFAULT NULL');
        $this->addSql('ALTER TABLE page_translation CHANGE translatable_id translatable_id BIGINT DEFAULT NULL, CHANGE slug slug VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE footer CHANGE published published TINYINT(1) DEFAULT NULL, CHANGE createdAt createdAt DATETIME DEFAULT NULL, CHANGE updatedAt updatedAt DATETIME DEFAULT NULL');
        $this->addSql('ALTER TABLE footer_translation CHANGE translatable_id translatable_id BIGINT DEFAULT NULL, CHANGE url url VARCHAR(2000) DEFAULT NULL, CHANGE url_hash url_hash VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE message CHANGE thread_id thread_id INT DEFAULT NULL, CHANGE sender_id sender_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE message_metadata CHANGE message_id message_id INT DEFAULT NULL, CHANGE participant_id participant_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE message_thread CHANGE listing_id listing_id INT DEFAULT NULL, CHANGE booking_id booking_id INT DEFAULT NULL, CHANGE createdBy_id createdBy_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE message_thread_metadata CHANGE thread_id thread_id INT DEFAULT NULL, CHANGE participant_id participant_id INT DEFAULT NULL, CHANGE last_participant_message_date last_participant_message_date DATETIME DEFAULT NULL, CHANGE last_message_date last_message_date DATETIME DEFAULT NULL');
        $this->addSql('ALTER TABLE contact CHANGE phone phone VARCHAR(20) DEFAULT NULL, CHANGE createdAt createdAt DATETIME DEFAULT NULL, CHANGE updatedAt updatedAt DATETIME DEFAULT NULL');
        $this->addSql('ALTER TABLE review CHANGE createdAt createdAt DATETIME DEFAULT NULL, CHANGE updatedAt updatedAt DATETIME DEFAULT NULL');
        $this->addSql('ALTER TABLE parameter CHANGE value value VARCHAR(255) DEFAULT NULL, CHANGE type type VARCHAR(255) DEFAULT NULL, CHANGE description description VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE parameter_audit CHANGE name name VARCHAR(50) DEFAULT NULL, CHANGE value value VARCHAR(255) DEFAULT NULL, CHANGE type type VARCHAR(255) DEFAULT NULL, CHANGE description description VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE revisions CHANGE username username VARCHAR(255) DEFAULT NULL');
    }

    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE booking CHANGE new_booking_at new_booking_at DATETIME DEFAULT \'NULL\', CHANGE payed_booking_at payed_booking_at DATETIME DEFAULT \'NULL\', CHANGE refused_booking_at refused_booking_at DATETIME DEFAULT \'NULL\', CHANGE canceled_asker_booking_at canceled_asker_booking_at DATETIME DEFAULT \'NULL\', CHANGE createdAt createdAt DATETIME DEFAULT \'NULL\', CHANGE updatedAt updatedAt DATETIME DEFAULT \'NULL\'');
        $this->addSql('ALTER TABLE booking_bank_wire CHANGE payed_at payed_at DATETIME DEFAULT \'NULL\', CHANGE createdAt createdAt DATETIME DEFAULT \'NULL\', CHANGE updatedAt updatedAt DATETIME DEFAULT \'NULL\'');
        $this->addSql('ALTER TABLE booking_payin_refund CHANGE payed_at payed_at DATETIME DEFAULT \'NULL\', CHANGE createdAt createdAt DATETIME DEFAULT \'NULL\', CHANGE updatedAt updatedAt DATETIME DEFAULT \'NULL\'');
        $this->addSql('ALTER TABLE `booking_user_address` CHANGE createdAt createdAt DATETIME DEFAULT \'NULL\', CHANGE updatedAt updatedAt DATETIME DEFAULT \'NULL\'');
        $this->addSql('ALTER TABLE contact CHANGE phone phone VARCHAR(20) DEFAULT \'NULL\' COLLATE utf8_unicode_ci, CHANGE createdAt createdAt DATETIME DEFAULT \'NULL\', CHANGE updatedAt updatedAt DATETIME DEFAULT \'NULL\'');
        $this->addSql('ALTER TABLE country_information CHANGE country country VARCHAR(3) DEFAULT \'NULL\' COLLATE utf8_unicode_ci');
        $this->addSql('ALTER TABLE footer CHANGE published published TINYINT(1) DEFAULT \'NULL\', CHANGE createdAt createdAt DATETIME DEFAULT \'NULL\', CHANGE updatedAt updatedAt DATETIME DEFAULT \'NULL\'');
        $this->addSql('ALTER TABLE footer_translation CHANGE translatable_id translatable_id BIGINT DEFAULT NULL, CHANGE url url VARCHAR(2000) DEFAULT \'NULL\' COLLATE utf8_unicode_ci, CHANGE url_hash url_hash VARCHAR(255) DEFAULT \'NULL\' COLLATE utf8_unicode_ci');
        $this->addSql('ALTER TABLE geo_area CHANGE geocoding_id geocoding_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE geo_area_translation CHANGE translatable_id translatable_id INT DEFAULT NULL, CHANGE slug slug VARCHAR(255) DEFAULT \'NULL\' COLLATE utf8_unicode_ci');
        $this->addSql('ALTER TABLE geo_city CHANGE geocoding_id geocoding_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE geo_city_translation CHANGE translatable_id translatable_id INT DEFAULT NULL, CHANGE slug slug VARCHAR(255) DEFAULT \'NULL\' COLLATE utf8_unicode_ci');
        $this->addSql('ALTER TABLE geo_coordinate CHANGE area_id area_id INT DEFAULT NULL, CHANGE department_id department_id INT DEFAULT NULL, CHANGE city_id city_id INT DEFAULT NULL, CHANGE zip zip VARCHAR(30) DEFAULT \'NULL\' COLLATE utf8_unicode_ci, CHANGE route route VARCHAR(200) DEFAULT \'NULL\' COLLATE utf8_unicode_ci, CHANGE street_number street_number VARCHAR(20) DEFAULT \'NULL\' COLLATE utf8_unicode_ci, CHANGE createdAt createdAt DATETIME DEFAULT \'NULL\', CHANGE updatedAt updatedAt DATETIME DEFAULT \'NULL\'');
        $this->addSql('ALTER TABLE geo_country CHANGE geocoding_id geocoding_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE geo_country_translation CHANGE translatable_id translatable_id INT DEFAULT NULL, CHANGE slug slug VARCHAR(255) DEFAULT \'NULL\' COLLATE utf8_unicode_ci');
        $this->addSql('ALTER TABLE geo_department CHANGE geocoding_id geocoding_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE geo_department_translation CHANGE translatable_id translatable_id INT DEFAULT NULL, CHANGE slug slug VARCHAR(255) DEFAULT \'NULL\' COLLATE utf8_unicode_ci');
        $this->addSql('ALTER TABLE listing CHANGE location_id location_id INT DEFAULT NULL, CHANGE type type SMALLINT DEFAULT NULL, CHANGE certified certified TINYINT(1) DEFAULT \'NULL\', CHANGE min_duration min_duration SMALLINT DEFAULT NULL, CHANGE max_duration max_duration SMALLINT DEFAULT NULL, CHANGE average_rating average_rating SMALLINT DEFAULT NULL, CHANGE comment_count comment_count INT DEFAULT NULL, CHANGE admin_notation admin_notation NUMERIC(3, 1) DEFAULT \'NULL\', CHANGE availabilities_updated_at availabilities_updated_at DATETIME DEFAULT \'NULL\', CHANGE createdAt createdAt DATETIME DEFAULT \'NULL\', CHANGE updatedAt updatedAt DATETIME DEFAULT \'NULL\'');
        $this->addSql('ALTER TABLE listing_category CHANGE parent_id parent_id INT DEFAULT NULL, CHANGE category_pin_id category_pin_id INT DEFAULT NULL, CHANGE root root INT DEFAULT NULL');
        $this->addSql('ALTER TABLE listing_category_translation CHANGE translatable_id translatable_id INT DEFAULT NULL, CHANGE slug slug VARCHAR(255) DEFAULT \'NULL\' COLLATE utf8_unicode_ci');
        $this->addSql('ALTER TABLE listing_characteristic_group_translation CHANGE translatable_id translatable_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE listing_characteristic_translation CHANGE translatable_id translatable_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE listing_characteristic_value_translation CHANGE translatable_id translatable_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE listing_listing_characteristic CHANGE listing_characteristic_value_id listing_characteristic_value_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE listing_location CHANGE listing_id listing_id INT DEFAULT NULL, CHANGE zip zip VARCHAR(20) DEFAULT \'NULL\' COLLATE utf8_unicode_ci, CHANGE route route VARCHAR(120) DEFAULT \'NULL\' COLLATE utf8_unicode_ci, CHANGE street_number street_number VARCHAR(20) DEFAULT \'NULL\' COLLATE utf8_unicode_ci');
        $this->addSql('ALTER TABLE listing_translation CHANGE translatable_id translatable_id INT DEFAULT NULL, CHANGE slug slug VARCHAR(255) DEFAULT \'NULL\' COLLATE utf8_unicode_ci');
        $this->addSql('ALTER TABLE member_organization CHANGE country country VARCHAR(3) DEFAULT \'NULL\' COLLATE utf8_unicode_ci, CHANGE abstract abstract VARCHAR(255) DEFAULT \'NULL\' COLLATE utf8_unicode_ci');
        $this->addSql('ALTER TABLE message CHANGE thread_id thread_id INT DEFAULT NULL, CHANGE sender_id sender_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE message_metadata CHANGE message_id message_id INT DEFAULT NULL, CHANGE participant_id participant_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE message_thread CHANGE listing_id listing_id INT DEFAULT NULL, CHANGE booking_id booking_id INT DEFAULT NULL, CHANGE createdBy_id createdBy_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE message_thread_metadata CHANGE thread_id thread_id INT DEFAULT NULL, CHANGE participant_id participant_id INT DEFAULT NULL, CHANGE last_participant_message_date last_participant_message_date DATETIME DEFAULT \'NULL\', CHANGE last_message_date last_message_date DATETIME DEFAULT \'NULL\'');
        $this->addSql('ALTER TABLE page CHANGE published published TINYINT(1) DEFAULT \'NULL\', CHANGE createdAt createdAt DATETIME DEFAULT \'NULL\', CHANGE updatedAt updatedAt DATETIME DEFAULT \'NULL\'');
        $this->addSql('ALTER TABLE page_translation CHANGE translatable_id translatable_id BIGINT DEFAULT NULL, CHANGE slug slug VARCHAR(255) DEFAULT \'NULL\' COLLATE utf8_unicode_ci');
        $this->addSql('ALTER TABLE parameter CHANGE value value VARCHAR(255) DEFAULT \'NULL\' COLLATE utf8_unicode_ci, CHANGE type type VARCHAR(255) DEFAULT \'NULL\' COLLATE utf8_unicode_ci, CHANGE description description VARCHAR(255) DEFAULT \'NULL\' COLLATE utf8_unicode_ci');
        $this->addSql('ALTER TABLE parameter_audit CHANGE name name VARCHAR(50) DEFAULT \'NULL\' COLLATE utf8_unicode_ci, CHANGE value value VARCHAR(255) DEFAULT \'NULL\' COLLATE utf8_unicode_ci, CHANGE type type VARCHAR(255) DEFAULT \'NULL\' COLLATE utf8_unicode_ci, CHANGE description description VARCHAR(255) DEFAULT \'NULL\' COLLATE utf8_unicode_ci');
        $this->addSql('ALTER TABLE review CHANGE createdAt createdAt DATETIME DEFAULT \'NULL\', CHANGE updatedAt updatedAt DATETIME DEFAULT \'NULL\'');
        $this->addSql('ALTER TABLE revisions CHANGE username username VARCHAR(255) DEFAULT \'NULL\' COLLATE utf8_unicode_ci');
        $this->addSql('ALTER TABLE `user` DROP location, CHANGE salt salt VARCHAR(255) DEFAULT \'NULL\' COLLATE utf8_unicode_ci, CHANGE last_login last_login DATETIME DEFAULT \'NULL\', CHANGE confirmation_token confirmation_token VARCHAR(180) DEFAULT \'NULL\' COLLATE utf8_unicode_ci, CHANGE password_requested_at password_requested_at DATETIME DEFAULT \'NULL\', CHANGE phone_prefix phone_prefix VARCHAR(6) DEFAULT \'NULL\' COLLATE utf8_unicode_ci, CHANGE phone phone VARCHAR(16) DEFAULT \'NULL\' COLLATE utf8_unicode_ci, CHANGE country country VARCHAR(3) DEFAULT \'NULL\' COLLATE utf8_unicode_ci, CHANGE country_of_residence country_of_residence VARCHAR(3) DEFAULT \'NULL\' COLLATE utf8_unicode_ci, CHANGE profession profession VARCHAR(50) DEFAULT \'NULL\' COLLATE utf8_unicode_ci, CHANGE iban iban VARCHAR(45) DEFAULT \'NULL\' COLLATE utf8_unicode_ci, CHANGE bic bic VARCHAR(25) DEFAULT \'NULL\' COLLATE utf8_unicode_ci, CHANGE bank_owner_name bank_owner_name VARCHAR(100) DEFAULT \'NULL\' COLLATE utf8_unicode_ci, CHANGE bank_owner_address bank_owner_address VARCHAR(255) DEFAULT \'NULL\' COLLATE utf8_unicode_ci, CHANGE annual_income annual_income NUMERIC(10, 2) DEFAULT \'NULL\', CHANGE email_verified email_verified TINYINT(1) DEFAULT \'NULL\', CHANGE id_card_verified id_card_verified TINYINT(1) DEFAULT \'NULL\', CHANGE trusted trusted TINYINT(1) DEFAULT \'NULL\', CHANGE trusted_email_sent trusted_email_sent TINYINT(1) DEFAULT \'NULL\', CHANGE nb_bookings_offerer nb_bookings_offerer SMALLINT DEFAULT NULL, CHANGE nb_bookings_asker nb_bookings_asker SMALLINT DEFAULT NULL, CHANGE fee_as_asker fee_as_asker SMALLINT DEFAULT NULL, CHANGE fee_as_offerer fee_as_offerer SMALLINT DEFAULT NULL, CHANGE average_rating_as_asker average_rating_as_asker SMALLINT DEFAULT NULL, CHANGE average_rating_as_offerer average_rating_as_offerer SMALLINT DEFAULT NULL, CHANGE mother_tongue mother_tongue VARCHAR(5) DEFAULT \'NULL\' COLLATE utf8_unicode_ci, CHANGE answer_delay answer_delay INT DEFAULT NULL, CHANGE skaut_is_id skaut_is_id VARCHAR(100) DEFAULT \'NULL\' COLLATE utf8_unicode_ci, CHANGE organizationIdentifier organizationIdentifier VARCHAR(50) DEFAULT \'NULL\' COLLATE utf8_unicode_ci, CHANGE scout_since scout_since INT DEFAULT NULL, CHANGE createdAt createdAt DATETIME DEFAULT \'NULL\', CHANGE updatedAt updatedAt DATETIME DEFAULT \'NULL\', CHANGE slug slug VARCHAR(255) DEFAULT \'NULL\' COLLATE utf8_unicode_ci, CHANGE memberOrganization_id memberOrganization_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE `user_address` CHANGE address address VARCHAR(255) DEFAULT \'NULL\' COLLATE utf8_unicode_ci, CHANGE city city VARCHAR(255) DEFAULT \'NULL\' COLLATE utf8_unicode_ci, CHANGE zip zip VARCHAR(50) DEFAULT \'NULL\' COLLATE utf8_unicode_ci, CHANGE country country VARCHAR(3) DEFAULT \'NULL\' COLLATE utf8_unicode_ci, CHANGE createdAt createdAt DATETIME DEFAULT \'NULL\', CHANGE updatedAt updatedAt DATETIME DEFAULT \'NULL\'');
        $this->addSql('ALTER TABLE `user_facebook` CHANGE user_id user_id INT DEFAULT NULL, CHANGE birthday birthday DATE DEFAULT \'NULL\', CHANGE address address VARCHAR(255) DEFAULT \'NULL\' COLLATE utf8_unicode_ci, CHANGE verified verified VARCHAR(100) DEFAULT \'NULL\' COLLATE utf8_unicode_ci, CHANGE location location VARCHAR(100) DEFAULT \'NULL\' COLLATE utf8_unicode_ci, CHANGE location_id location_id VARCHAR(100) DEFAULT \'NULL\' COLLATE utf8_unicode_ci, CHANGE hometown hometown VARCHAR(100) DEFAULT \'NULL\' COLLATE utf8_unicode_ci, CHANGE hometown_id hometown_id VARCHAR(100) DEFAULT \'NULL\' COLLATE utf8_unicode_ci, CHANGE gender gender VARCHAR(20) DEFAULT \'NULL\' COLLATE utf8_unicode_ci, CHANGE locale locale VARCHAR(50) DEFAULT \'NULL\' COLLATE utf8_unicode_ci, CHANGE timezone timezone VARCHAR(100) DEFAULT \'NULL\' COLLATE utf8_unicode_ci, CHANGE nb_friends nb_friends VARCHAR(15) DEFAULT \'NULL\' COLLATE utf8_unicode_ci, CHANGE picture picture VARCHAR(100) DEFAULT \'NULL\' COLLATE utf8_unicode_ci, CHANGE createdAt createdAt DATETIME DEFAULT \'NULL\', CHANGE updatedAt updatedAt DATETIME DEFAULT \'NULL\'');
        $this->addSql('ALTER TABLE user_translation CHANGE translatable_id translatable_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE verified_domain CHANGE memberOrganization_id memberOrganization_id INT DEFAULT NULL');
    }
}

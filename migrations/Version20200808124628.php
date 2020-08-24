<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200808124628 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE announcement (id INT AUTO_INCREMENT NOT NULL, departure_time DATETIME NOT NULL, arriving_time DATETIME NOT NULL, price DOUBLE PRECISION NOT NULL, number_of_kilogramme DOUBLE PRECISION NOT NULL, meeting_places1 VARCHAR(255) NOT NULL, meeting_place2 VARCHAR(255) NOT NULL, published DATETIME NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE announcement_validation (id INT AUTO_INCREMENT NOT NULL, description VARCHAR(255) NOT NULL, number_of_kilogram_remaing DOUBLE PRECISION NOT NULL, state INT NOT NULL, published DATETIME NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE notice (id INT AUTO_INCREMENT NOT NULL, note INT NOT NULL, comment VARCHAR(255) NOT NULL, published DATETIME NOT NULL, transmitter_id INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE notification (id INT AUTO_INCREMENT NOT NULL, wording_id INT NOT NULL, wording VARCHAR(255) NOT NULL, type_id INT NOT NULL, state INT NOT NULL, user_id INT NOT NULL, updated DATETIME NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE number_of_kilogramm_remaing (id INT AUTO_INCREMENT NOT NULL, wording VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE parcel_tracker (id INT AUTO_INCREMENT NOT NULL, number INT NOT NULL, published DATETIME NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, firstname VARCHAR(255) NOT NULL, lastname VARCHAR(255) NOT NULL, birthday DATE NOT NULL, sex VARCHAR(1) NOT NULL, email VARCHAR(255) NOT NULL, password VARCHAR(255) NOT NULL, lang VARCHAR(255) NOT NULL, state INT NOT NULL, online INT NOT NULL, active INT NOT NULL, activation_code VARCHAR(255) NOT NULL, key_push VARCHAR(255) NOT NULL, token_user VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE announcement');
        $this->addSql('DROP TABLE announcement_validation');
        $this->addSql('DROP TABLE notice');
        $this->addSql('DROP TABLE notification');
        $this->addSql('DROP TABLE number_of_kilogramm_remaing');
        $this->addSql('DROP TABLE parcel_tracker');
        $this->addSql('DROP TABLE user');
    }
}

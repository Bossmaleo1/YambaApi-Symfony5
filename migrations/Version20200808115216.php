<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200808115216 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE country (id INT AUTO_INCREMENT NOT NULL, wording VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE international_airport (id INT AUTO_INCREMENT NOT NULL, town_id INT NOT NULL, wording VARCHAR(255) DEFAULT NULL, code VARCHAR(255) NOT NULL, INDEX IDX_A7A8544775E23604 (town_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE town (id INT AUTO_INCREMENT NOT NULL, country_id INT NOT NULL, wording VARCHAR(255) DEFAULT NULL, INDEX IDX_4CE6C7A4F92F3E70 (country_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE international_airport ADD CONSTRAINT FK_A7A8544775E23604 FOREIGN KEY (town_id) REFERENCES town (id)');
        $this->addSql('ALTER TABLE town ADD CONSTRAINT FK_4CE6C7A4F92F3E70 FOREIGN KEY (country_id) REFERENCES country (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE town DROP FOREIGN KEY FK_4CE6C7A4F92F3E70');
        $this->addSql('ALTER TABLE international_airport DROP FOREIGN KEY FK_A7A8544775E23604');
        $this->addSql('DROP TABLE country');
        $this->addSql('DROP TABLE international_airport');
        $this->addSql('DROP TABLE town');
    }
}

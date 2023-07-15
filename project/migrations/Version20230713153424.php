<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230713153424 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE companie ADD id_api INT DEFAULT NULL');
        $this->addSql('ALTER TABLE result ADD id_api INT DEFAULT NULL');
        $this->addSql('ALTER TABLE result ADD CONSTRAINT FK_136AC1139DC4CE1F FOREIGN KEY (companie_id) REFERENCES companie (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE companie DROP id_api');
        $this->addSql('ALTER TABLE result DROP FOREIGN KEY FK_136AC1139DC4CE1F');
        $this->addSql('ALTER TABLE result DROP id_api');
    }
}

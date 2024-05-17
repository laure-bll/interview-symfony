<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240515151005 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TEMPORARY TABLE __temp__beneficiary AS SELECT id, name, creator, created_at FROM beneficiary');
        $this->addSql('DROP TABLE beneficiary');
        $this->addSql('CREATE TABLE beneficiary (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, name VARCHAR(255) NOT NULL, creator VARCHAR(255) NOT NULL, created_at DATETIME DEFAULT CURRENT_TIMESTAMP NOT NULL --(DC2Type:datetime_immutable)
        )');
        $this->addSql('INSERT INTO beneficiary (id, name, creator, created_at) SELECT id, name, creator, created_at FROM __temp__beneficiary');
        $this->addSql('DROP TABLE __temp__beneficiary');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TEMPORARY TABLE __temp__beneficiary AS SELECT id, name, creator, created_at FROM beneficiary');
        $this->addSql('DROP TABLE beneficiary');
        $this->addSql('CREATE TABLE beneficiary (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, name VARCHAR(255) NOT NULL, creator VARCHAR(255) NOT NULL, created_at DATETIME NOT NULL --(DC2Type:datetime_immutable)
        )');
        $this->addSql('INSERT INTO beneficiary (id, name, creator, created_at) SELECT id, name, creator, created_at FROM __temp__beneficiary');
        $this->addSql('DROP TABLE __temp__beneficiary');
    }
}

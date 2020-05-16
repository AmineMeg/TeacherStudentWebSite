<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200516123247 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE etat_exo (id INT AUTO_INCREMENT NOT NULL, etat VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE ligne_eleve (id INT AUTO_INCREMENT NOT NULL, exercice_id INT NOT NULL, contenu VARCHAR(255) NOT NULL, position INT NOT NULL, numero VARCHAR(255) NOT NULL, INDEX IDX_EF0DEFC789D40298 (exercice_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE ligne_eleve ADD CONSTRAINT FK_EF0DEFC789D40298 FOREIGN KEY (exercice_id) REFERENCES exercice (id)');
        $this->addSql('ALTER TABLE exercice ADD etat_exo_id INT DEFAULT NULL, CHANGE updated_at updated_at DATETIME DEFAULT NULL');
        $this->addSql('ALTER TABLE exercice ADD CONSTRAINT FK_E418C74D68E7F337 FOREIGN KEY (etat_exo_id) REFERENCES etat_exo (id)');
        $this->addSql('CREATE INDEX IDX_E418C74D68E7F337 ON exercice (etat_exo_id)');
        $this->addSql('DROP INDEX UNIQ_8D93D649F85E0677 ON user');
        $this->addSql('ALTER TABLE user ADD etat_exo_id INT DEFAULT NULL, CHANGE roles roles JSON NOT NULL');
        $this->addSql('ALTER TABLE user ADD CONSTRAINT FK_8D93D64968E7F337 FOREIGN KEY (etat_exo_id) REFERENCES etat_exo (id)');
        $this->addSql('CREATE INDEX IDX_8D93D64968E7F337 ON user (etat_exo_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE exercice DROP FOREIGN KEY FK_E418C74D68E7F337');
        $this->addSql('ALTER TABLE user DROP FOREIGN KEY FK_8D93D64968E7F337');
        $this->addSql('DROP TABLE etat_exo');
        $this->addSql('DROP TABLE ligne_eleve');
        $this->addSql('DROP INDEX IDX_E418C74D68E7F337 ON exercice');
        $this->addSql('ALTER TABLE exercice DROP etat_exo_id, CHANGE updated_at updated_at DATETIME DEFAULT \'NULL\'');
        $this->addSql('DROP INDEX IDX_8D93D64968E7F337 ON user');
        $this->addSql('ALTER TABLE user DROP etat_exo_id, CHANGE roles roles LONGTEXT CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_bin`');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_8D93D649F85E0677 ON user (username)');
    }
}

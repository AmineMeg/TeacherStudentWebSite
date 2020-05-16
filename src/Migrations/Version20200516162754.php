<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200516162754 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE etat_exo ADD exercice_id INT NOT NULL, ADD eleve_id INT NOT NULL');
        $this->addSql('ALTER TABLE etat_exo ADD CONSTRAINT FK_CD6D867689D40298 FOREIGN KEY (exercice_id) REFERENCES exercice (id)');
        $this->addSql('ALTER TABLE etat_exo ADD CONSTRAINT FK_CD6D8676A6CC7B2 FOREIGN KEY (eleve_id) REFERENCES user (id)');
        $this->addSql('CREATE INDEX IDX_CD6D867689D40298 ON etat_exo (exercice_id)');
        $this->addSql('CREATE INDEX IDX_CD6D8676A6CC7B2 ON etat_exo (eleve_id)');
        $this->addSql('ALTER TABLE exercice DROP FOREIGN KEY FK_E418C74D68E7F337');
        $this->addSql('DROP INDEX IDX_E418C74D68E7F337 ON exercice');
        $this->addSql('ALTER TABLE exercice DROP etat_exo_id, CHANGE updated_at updated_at DATETIME DEFAULT NULL');
        $this->addSql('ALTER TABLE user CHANGE etat_exo_id etat_exo_id INT DEFAULT NULL, CHANGE roles roles JSON NOT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE etat_exo DROP FOREIGN KEY FK_CD6D867689D40298');
        $this->addSql('ALTER TABLE etat_exo DROP FOREIGN KEY FK_CD6D8676A6CC7B2');
        $this->addSql('DROP INDEX IDX_CD6D867689D40298 ON etat_exo');
        $this->addSql('DROP INDEX IDX_CD6D8676A6CC7B2 ON etat_exo');
        $this->addSql('ALTER TABLE etat_exo DROP exercice_id, DROP eleve_id');
        $this->addSql('ALTER TABLE exercice ADD etat_exo_id INT DEFAULT NULL, CHANGE updated_at updated_at DATETIME DEFAULT \'NULL\'');
        $this->addSql('ALTER TABLE exercice ADD CONSTRAINT FK_E418C74D68E7F337 FOREIGN KEY (etat_exo_id) REFERENCES etat_exo (id)');
        $this->addSql('CREATE INDEX IDX_E418C74D68E7F337 ON exercice (etat_exo_id)');
        $this->addSql('ALTER TABLE user CHANGE etat_exo_id etat_exo_id INT DEFAULT NULL, CHANGE roles roles LONGTEXT CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_bin`');
    }
}

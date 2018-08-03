<?php declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20180801151346 extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE lessons DROP FOREIGN KEY FK_3F4218D92C5BABB2');
        $this->addSql('DROP INDEX IDX_3F4218D92C5BABB2 ON lessons');
        $this->addSql('ALTER TABLE lessons DROP categories_idcategories_id, DROP idcategories_id, CHANGE lessons lessons VARCHAR(255) NOT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE lessons ADD categories_idcategories_id INT DEFAULT NULL, ADD idcategories_id INT NOT NULL, CHANGE lessons lessons LONGTEXT NOT NULL COLLATE utf8mb4_unicode_ci');
        $this->addSql('ALTER TABLE lessons ADD CONSTRAINT FK_3F4218D92C5BABB2 FOREIGN KEY (categories_idcategories_id) REFERENCES categories (id)');
        $this->addSql('CREATE INDEX IDX_3F4218D92C5BABB2 ON lessons (categories_idcategories_id)');
    }
}

<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20191202180349 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE member_publication (id INT AUTO_INCREMENT NOT NULL, publication_id INT DEFAULT NULL, author_id INT DEFAULT NULL, author_sequence INT NOT NULL, INDEX IDX_760173BB38B217A7 (publication_id), INDEX IDX_760173BBF675F31B (author_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE publication_type (id INT AUTO_INCREMENT NOT NULL, type VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE member (id INT AUTO_INCREMENT NOT NULL, status_id INT DEFAULT NULL, supervisor_id INT DEFAULT NULL, name VARCHAR(255) NOT NULL, qualifications VARCHAR(255) DEFAULT NULL, position VARCHAR(255) NOT NULL, email VARCHAR(255) DEFAULT NULL, phone VARCHAR(255) DEFAULT NULL, website VARCHAR(255) DEFAULT NULL, bio VARCHAR(255) NOT NULL, bio_image VARCHAR(255) DEFAULT NULL, INDEX IDX_70E4FA786BF700BD (status_id), INDEX IDX_70E4FA7819E9AC5F (supervisor_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE publication (id INT AUTO_INCREMENT NOT NULL, type_id INT DEFAULT NULL, title VARCHAR(255) NOT NULL, conference VARCHAR(255) NOT NULL, venue VARCHAR(255) NOT NULL, published VARCHAR(255) NOT NULL, abstract VARCHAR(255) DEFAULT NULL, url VARCHAR(255) DEFAULT NULL, month VARCHAR(2) NOT NULL, year VARCHAR(255) NOT NULL, INDEX IDX_AF3C6779C54C8C93 (type_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE member_status (id INT AUTO_INCREMENT NOT NULL, status VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE member_publication ADD CONSTRAINT FK_760173BB38B217A7 FOREIGN KEY (publication_id) REFERENCES publication (id)');
        $this->addSql('ALTER TABLE member_publication ADD CONSTRAINT FK_760173BBF675F31B FOREIGN KEY (author_id) REFERENCES member (id)');
        $this->addSql('ALTER TABLE member ADD CONSTRAINT FK_70E4FA786BF700BD FOREIGN KEY (status_id) REFERENCES member_status (id)');
        $this->addSql('ALTER TABLE member ADD CONSTRAINT FK_70E4FA7819E9AC5F FOREIGN KEY (supervisor_id) REFERENCES member (id)');
        $this->addSql('ALTER TABLE publication ADD CONSTRAINT FK_AF3C6779C54C8C93 FOREIGN KEY (type_id) REFERENCES publication_type (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE publication DROP FOREIGN KEY FK_AF3C6779C54C8C93');
        $this->addSql('ALTER TABLE member_publication DROP FOREIGN KEY FK_760173BBF675F31B');
        $this->addSql('ALTER TABLE member DROP FOREIGN KEY FK_70E4FA7819E9AC5F');
        $this->addSql('ALTER TABLE member_publication DROP FOREIGN KEY FK_760173BB38B217A7');
        $this->addSql('ALTER TABLE member DROP FOREIGN KEY FK_70E4FA786BF700BD');
        $this->addSql('DROP TABLE member_publication');
        $this->addSql('DROP TABLE publication_type');
        $this->addSql('DROP TABLE member');
        $this->addSql('DROP TABLE publication');
        $this->addSql('DROP TABLE member_status');
    }
}

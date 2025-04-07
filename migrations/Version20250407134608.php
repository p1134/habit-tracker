<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250407134608 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql(<<<'SQL'
            CREATE TABLE habit (id INT AUTO_INCREMENT NOT NULL, user_id INT NOT NULL, INDEX IDX_44FE2172A76ED395 (user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE tracking (id INT AUTO_INCREMENT NOT NULL, habit_id INT NOT NULL, date DATE NOT NULL, selected TINYINT(1) NOT NULL, INDEX IDX_A87C621CE7AEB3B2 (habit_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE habit ADD CONSTRAINT FK_44FE2172A76ED395 FOREIGN KEY (user_id) REFERENCES user (id)
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE tracking ADD CONSTRAINT FK_A87C621CE7AEB3B2 FOREIGN KEY (habit_id) REFERENCES habit (id)
        SQL);
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql(<<<'SQL'
            ALTER TABLE habit DROP FOREIGN KEY FK_44FE2172A76ED395
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE tracking DROP FOREIGN KEY FK_A87C621CE7AEB3B2
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE habit
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE tracking
        SQL);
    }
}

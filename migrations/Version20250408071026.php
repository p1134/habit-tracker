<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250408071026 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql(<<<'SQL'
            ALTER TABLE selected_habits ADD user_id INT NOT NULL
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE selected_habits ADD CONSTRAINT FK_59EB8C7DA76ED395 FOREIGN KEY (user_id) REFERENCES user (id)
        SQL);
        $this->addSql(<<<'SQL'
            CREATE INDEX IDX_59EB8C7DA76ED395 ON selected_habits (user_id)
        SQL);
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql(<<<'SQL'
            ALTER TABLE selected_habits DROP FOREIGN KEY FK_59EB8C7DA76ED395
        SQL);
        $this->addSql(<<<'SQL'
            DROP INDEX IDX_59EB8C7DA76ED395 ON selected_habits
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE selected_habits DROP user_id
        SQL);
    }
}

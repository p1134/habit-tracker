<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250409183423 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql(<<<'SQL'
            ALTER TABLE tracking ADD selected_habits_id INT DEFAULT NULL
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE tracking ADD CONSTRAINT FK_A87C621C9A86D2DD FOREIGN KEY (selected_habits_id) REFERENCES selected_habits (id)
        SQL);
        $this->addSql(<<<'SQL'
            CREATE INDEX IDX_A87C621C9A86D2DD ON tracking (selected_habits_id)
        SQL);
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql(<<<'SQL'
            ALTER TABLE tracking DROP FOREIGN KEY FK_A87C621C9A86D2DD
        SQL);
        $this->addSql(<<<'SQL'
            DROP INDEX IDX_A87C621C9A86D2DD ON tracking
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE tracking DROP selected_habits_id
        SQL);
    }
}

<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250408164510 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql(<<<'SQL'
            ALTER TABLE selected_habits ADD own_habit_id INT DEFAULT NULL
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE selected_habits ADD CONSTRAINT FK_59EB8C7D1643A4D9 FOREIGN KEY (own_habit_id) REFERENCES own_habit (id)
        SQL);
        $this->addSql(<<<'SQL'
            CREATE INDEX IDX_59EB8C7D1643A4D9 ON selected_habits (own_habit_id)
        SQL);
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql(<<<'SQL'
            ALTER TABLE selected_habits DROP FOREIGN KEY FK_59EB8C7D1643A4D9
        SQL);
        $this->addSql(<<<'SQL'
            DROP INDEX IDX_59EB8C7D1643A4D9 ON selected_habits
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE selected_habits DROP own_habit_id
        SQL);
    }
}

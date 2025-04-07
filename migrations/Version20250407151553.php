<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250407151553 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql(<<<'SQL'
            CREATE TABLE own_habit (id INT AUTO_INCREMENT NOT NULL, user_id INT NOT NULL, category_id INT NOT NULL, name VARCHAR(255) NOT NULL, INDEX IDX_67CB99A7A76ED395 (user_id), INDEX IDX_67CB99A712469DE2 (category_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE own_habit ADD CONSTRAINT FK_67CB99A7A76ED395 FOREIGN KEY (user_id) REFERENCES user (id)
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE own_habit ADD CONSTRAINT FK_67CB99A712469DE2 FOREIGN KEY (category_id) REFERENCES category (id)
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE habit ADD category_id INT NOT NULL
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE habit ADD CONSTRAINT FK_44FE217212469DE2 FOREIGN KEY (category_id) REFERENCES category (id)
        SQL);
        $this->addSql(<<<'SQL'
            CREATE INDEX IDX_44FE217212469DE2 ON habit (category_id)
        SQL);
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql(<<<'SQL'
            ALTER TABLE own_habit DROP FOREIGN KEY FK_67CB99A7A76ED395
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE own_habit DROP FOREIGN KEY FK_67CB99A712469DE2
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE own_habit
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE habit DROP FOREIGN KEY FK_44FE217212469DE2
        SQL);
        $this->addSql(<<<'SQL'
            DROP INDEX IDX_44FE217212469DE2 ON habit
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE habit DROP category_id
        SQL);
    }
}

<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250408110023 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql(<<<'SQL'
            ALTER TABLE habit DROP FOREIGN KEY habit_ibfk_1
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE habit ADD CONSTRAINT FK_44FE217212469DE2 FOREIGN KEY (category_id) REFERENCES category (id)
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE own_habit DROP FOREIGN KEY own_habit_ibfk_2
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE own_habit DROP FOREIGN KEY own_habit_ibfk_3
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE own_habit ADD CONSTRAINT FK_67CB99A7A76ED395 FOREIGN KEY (user_id) REFERENCES user (id)
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE own_habit ADD CONSTRAINT FK_67CB99A712469DE2 FOREIGN KEY (category_id) REFERENCES category (id)
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE selected_habits DROP FOREIGN KEY selected_habits_ibfk_2
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE selected_habits DROP FOREIGN KEY selected_habits_ibfk_1
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE selected_habits ADD name VARCHAR(255) NOT NULL, ADD date DATE NOT NULL
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE selected_habits ADD CONSTRAINT FK_59EB8C7DE7AEB3B2 FOREIGN KEY (habit_id) REFERENCES habit (id)
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE selected_habits ADD CONSTRAINT FK_59EB8C7DA76ED395 FOREIGN KEY (user_id) REFERENCES user (id)
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE tracking DROP FOREIGN KEY tracking_ibfk_1
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE tracking ADD CONSTRAINT FK_A87C621CE7AEB3B2 FOREIGN KEY (habit_id) REFERENCES habit (id)
        SQL);
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql(<<<'SQL'
            ALTER TABLE habit DROP FOREIGN KEY FK_44FE217212469DE2
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE habit ADD CONSTRAINT habit_ibfk_1 FOREIGN KEY (category_id) REFERENCES category (id) ON UPDATE CASCADE ON DELETE CASCADE
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE selected_habits DROP FOREIGN KEY FK_59EB8C7DE7AEB3B2
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE selected_habits DROP FOREIGN KEY FK_59EB8C7DA76ED395
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE selected_habits DROP name, DROP date
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE selected_habits ADD CONSTRAINT selected_habits_ibfk_2 FOREIGN KEY (user_id) REFERENCES user (id) ON UPDATE CASCADE ON DELETE CASCADE
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE selected_habits ADD CONSTRAINT selected_habits_ibfk_1 FOREIGN KEY (habit_id) REFERENCES habit (id) ON UPDATE CASCADE ON DELETE CASCADE
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE own_habit DROP FOREIGN KEY FK_67CB99A7A76ED395
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE own_habit DROP FOREIGN KEY FK_67CB99A712469DE2
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE own_habit ADD CONSTRAINT own_habit_ibfk_2 FOREIGN KEY (category_id) REFERENCES category (id) ON UPDATE CASCADE ON DELETE CASCADE
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE own_habit ADD CONSTRAINT own_habit_ibfk_3 FOREIGN KEY (user_id) REFERENCES user (id) ON UPDATE CASCADE ON DELETE CASCADE
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE tracking DROP FOREIGN KEY FK_A87C621CE7AEB3B2
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE tracking ADD CONSTRAINT tracking_ibfk_1 FOREIGN KEY (habit_id) REFERENCES habit (id) ON UPDATE CASCADE ON DELETE CASCADE
        SQL);
    }
}

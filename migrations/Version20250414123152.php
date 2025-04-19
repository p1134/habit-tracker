<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250414123152 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql(<<<'SQL'
            CREATE TABLE category (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE habit (id INT AUTO_INCREMENT NOT NULL, category_id INT NOT NULL, name VARCHAR(255) NOT NULL, INDEX IDX_44FE217212469DE2 (category_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE own_habit (id INT AUTO_INCREMENT NOT NULL, user_id INT NOT NULL, category_id INT NOT NULL, name VARCHAR(255) NOT NULL, is_deleted TINYINT(1) DEFAULT 0 NOT NULL, INDEX IDX_67CB99A7A76ED395 (user_id), INDEX IDX_67CB99A712469DE2 (category_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE selected_habits (id INT AUTO_INCREMENT NOT NULL, habit_id INT DEFAULT NULL, own_habit_id INT DEFAULT NULL, user_id INT NOT NULL, date DATE NOT NULL, is_deleted TINYINT(1) DEFAULT 0 NOT NULL, INDEX IDX_59EB8C7DE7AEB3B2 (habit_id), INDEX IDX_59EB8C7D1643A4D9 (own_habit_id), INDEX IDX_59EB8C7DA76ED395 (user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE tracking (id INT AUTO_INCREMENT NOT NULL, user_id INT NOT NULL, selected_habits_id INT NOT NULL, date DATE NOT NULL, selected TINYINT(1) NOT NULL, is_deleted TINYINT(1) DEFAULT 0 NOT NULL, INDEX IDX_A87C621CA76ED395 (user_id), INDEX IDX_A87C621C9A86D2DD (selected_habits_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, email VARCHAR(180) NOT NULL, roles JSON NOT NULL COMMENT '(DC2Type:json)', password VARCHAR(255) NOT NULL, is_verified TINYINT(1) NOT NULL, firstname VARCHAR(255) DEFAULT NULL, lastname VARCHAR(255) DEFAULT NULL, UNIQUE INDEX UNIQ_IDENTIFIER_EMAIL (email), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE messenger_messages (id BIGINT AUTO_INCREMENT NOT NULL, body LONGTEXT NOT NULL, headers LONGTEXT NOT NULL, queue_name VARCHAR(190) NOT NULL, created_at DATETIME NOT NULL COMMENT '(DC2Type:datetime_immutable)', available_at DATETIME NOT NULL COMMENT '(DC2Type:datetime_immutable)', delivered_at DATETIME DEFAULT NULL COMMENT '(DC2Type:datetime_immutable)', INDEX IDX_75EA56E0FB7336F0 (queue_name), INDEX IDX_75EA56E0E3BD61CE (available_at), INDEX IDX_75EA56E016BA31DB (delivered_at), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE habit ADD CONSTRAINT FK_44FE217212469DE2 FOREIGN KEY (category_id) REFERENCES category (id)
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE own_habit ADD CONSTRAINT FK_67CB99A7A76ED395 FOREIGN KEY (user_id) REFERENCES user (id)
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE own_habit ADD CONSTRAINT FK_67CB99A712469DE2 FOREIGN KEY (category_id) REFERENCES category (id)
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE selected_habits ADD CONSTRAINT FK_59EB8C7DE7AEB3B2 FOREIGN KEY (habit_id) REFERENCES habit (id)
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE selected_habits ADD CONSTRAINT FK_59EB8C7D1643A4D9 FOREIGN KEY (own_habit_id) REFERENCES own_habit (id)
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE selected_habits ADD CONSTRAINT FK_59EB8C7DA76ED395 FOREIGN KEY (user_id) REFERENCES user (id)
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE tracking ADD CONSTRAINT FK_A87C621CA76ED395 FOREIGN KEY (user_id) REFERENCES user (id)
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE tracking ADD CONSTRAINT FK_A87C621C9A86D2DD FOREIGN KEY (selected_habits_id) REFERENCES selected_habits (id)
        SQL);
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql(<<<'SQL'
            ALTER TABLE habit DROP FOREIGN KEY FK_44FE217212469DE2
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE own_habit DROP FOREIGN KEY FK_67CB99A7A76ED395
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE own_habit DROP FOREIGN KEY FK_67CB99A712469DE2
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE selected_habits DROP FOREIGN KEY FK_59EB8C7DE7AEB3B2
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE selected_habits DROP FOREIGN KEY FK_59EB8C7D1643A4D9
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE selected_habits DROP FOREIGN KEY FK_59EB8C7DA76ED395
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE tracking DROP FOREIGN KEY FK_A87C621CA76ED395
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE tracking DROP FOREIGN KEY FK_A87C621C9A86D2DD
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE category
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE habit
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE own_habit
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE selected_habits
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE tracking
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE user
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE messenger_messages
        SQL);
    }
}

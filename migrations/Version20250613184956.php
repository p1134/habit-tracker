<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250613184956 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql(<<<'SQL'
            CREATE TABLE achievement (id SERIAL NOT NULL, user_id INT DEFAULT NULL, name VARCHAR(255) NOT NULL, date_create DATE NOT NULL, is_shared BOOLEAN NOT NULL, PRIMARY KEY(id))
        SQL);
        $this->addSql(<<<'SQL'
            CREATE INDEX IDX_96737FF1A76ED395 ON achievement (user_id)
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE category (id SERIAL NOT NULL, name VARCHAR(255) NOT NULL, PRIMARY KEY(id))
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE habit (id SERIAL NOT NULL, category_id INT NOT NULL, name VARCHAR(255) NOT NULL, PRIMARY KEY(id))
        SQL);
        $this->addSql(<<<'SQL'
            CREATE INDEX IDX_44FE217212469DE2 ON habit (category_id)
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE own_habit (id SERIAL NOT NULL, user_id INT NOT NULL, category_id INT NOT NULL, name VARCHAR(255) NOT NULL, is_deleted BOOLEAN DEFAULT false NOT NULL, PRIMARY KEY(id))
        SQL);
        $this->addSql(<<<'SQL'
            CREATE INDEX IDX_67CB99A7A76ED395 ON own_habit (user_id)
        SQL);
        $this->addSql(<<<'SQL'
            CREATE INDEX IDX_67CB99A712469DE2 ON own_habit (category_id)
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE post (id SERIAL NOT NULL, user_id INT DEFAULT NULL, date_create DATE NOT NULL, date_delete DATE DEFAULT NULL, is_deleted BOOLEAN NOT NULL, PRIMARY KEY(id))
        SQL);
        $this->addSql(<<<'SQL'
            CREATE INDEX IDX_5A8A6C8DA76ED395 ON post (user_id)
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE selected_habits (id SERIAL NOT NULL, habit_id INT DEFAULT NULL, own_habit_id INT DEFAULT NULL, user_id INT NOT NULL, date DATE NOT NULL, is_deleted BOOLEAN DEFAULT false NOT NULL, delete_date DATE DEFAULT NULL, PRIMARY KEY(id))
        SQL);
        $this->addSql(<<<'SQL'
            CREATE INDEX IDX_59EB8C7DE7AEB3B2 ON selected_habits (habit_id)
        SQL);
        $this->addSql(<<<'SQL'
            CREATE INDEX IDX_59EB8C7D1643A4D9 ON selected_habits (own_habit_id)
        SQL);
        $this->addSql(<<<'SQL'
            CREATE INDEX IDX_59EB8C7DA76ED395 ON selected_habits (user_id)
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE tracking (id SERIAL NOT NULL, user_id INT NOT NULL, selected_habits_id INT NOT NULL, date DATE NOT NULL, selected BOOLEAN NOT NULL, is_deleted BOOLEAN DEFAULT false NOT NULL, PRIMARY KEY(id))
        SQL);
        $this->addSql(<<<'SQL'
            CREATE INDEX IDX_A87C621CA76ED395 ON tracking (user_id)
        SQL);
        $this->addSql(<<<'SQL'
            CREATE INDEX IDX_A87C621C9A86D2DD ON tracking (selected_habits_id)
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE users (id SERIAL NOT NULL, email VARCHAR(180) NOT NULL, roles JSON NOT NULL, password VARCHAR(255) NOT NULL, is_verified BOOLEAN NOT NULL, firstname VARCHAR(255) DEFAULT NULL, lastname VARCHAR(255) DEFAULT NULL, join_date DATE NOT NULL, gender VARCHAR(255) NOT NULL, current_streak INT DEFAULT NULL, PRIMARY KEY(id))
        SQL);
        $this->addSql(<<<'SQL'
            CREATE UNIQUE INDEX UNIQ_IDENTIFIER_EMAIL ON users (email)
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE messenger_messages (id BIGSERIAL NOT NULL, body TEXT NOT NULL, headers TEXT NOT NULL, queue_name VARCHAR(190) NOT NULL, created_at TIMESTAMP(0) WITHOUT TIME ZONE NOT NULL, available_at TIMESTAMP(0) WITHOUT TIME ZONE NOT NULL, delivered_at TIMESTAMP(0) WITHOUT TIME ZONE DEFAULT NULL, PRIMARY KEY(id))
        SQL);
        $this->addSql(<<<'SQL'
            CREATE INDEX IDX_75EA56E0FB7336F0 ON messenger_messages (queue_name)
        SQL);
        $this->addSql(<<<'SQL'
            CREATE INDEX IDX_75EA56E0E3BD61CE ON messenger_messages (available_at)
        SQL);
        $this->addSql(<<<'SQL'
            CREATE INDEX IDX_75EA56E016BA31DB ON messenger_messages (delivered_at)
        SQL);
        $this->addSql(<<<'SQL'
            COMMENT ON COLUMN messenger_messages.created_at IS '(DC2Type:datetime_immutable)'
        SQL);
        $this->addSql(<<<'SQL'
            COMMENT ON COLUMN messenger_messages.available_at IS '(DC2Type:datetime_immutable)'
        SQL);
        $this->addSql(<<<'SQL'
            COMMENT ON COLUMN messenger_messages.delivered_at IS '(DC2Type:datetime_immutable)'
        SQL);
        $this->addSql(<<<'SQL'
            CREATE OR REPLACE FUNCTION notify_messenger_messages() RETURNS TRIGGER AS $$
                BEGIN
                    PERFORM pg_notify('messenger_messages', NEW.queue_name::text);
                    RETURN NEW;
                END;
            $$ LANGUAGE plpgsql;
        SQL);
        $this->addSql(<<<'SQL'
            DROP TRIGGER IF EXISTS notify_trigger ON messenger_messages;
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TRIGGER notify_trigger AFTER INSERT OR UPDATE ON messenger_messages FOR EACH ROW EXECUTE PROCEDURE notify_messenger_messages();
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE achievement ADD CONSTRAINT FK_96737FF1A76ED395 FOREIGN KEY (user_id) REFERENCES users (id) NOT DEFERRABLE INITIALLY IMMEDIATE
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE habit ADD CONSTRAINT FK_44FE217212469DE2 FOREIGN KEY (category_id) REFERENCES category (id) NOT DEFERRABLE INITIALLY IMMEDIATE
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE own_habit ADD CONSTRAINT FK_67CB99A7A76ED395 FOREIGN KEY (user_id) REFERENCES users (id) NOT DEFERRABLE INITIALLY IMMEDIATE
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE own_habit ADD CONSTRAINT FK_67CB99A712469DE2 FOREIGN KEY (category_id) REFERENCES category (id) NOT DEFERRABLE INITIALLY IMMEDIATE
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE post ADD CONSTRAINT FK_5A8A6C8DA76ED395 FOREIGN KEY (user_id) REFERENCES users (id) NOT DEFERRABLE INITIALLY IMMEDIATE
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE selected_habits ADD CONSTRAINT FK_59EB8C7DE7AEB3B2 FOREIGN KEY (habit_id) REFERENCES habit (id) NOT DEFERRABLE INITIALLY IMMEDIATE
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE selected_habits ADD CONSTRAINT FK_59EB8C7D1643A4D9 FOREIGN KEY (own_habit_id) REFERENCES own_habit (id) NOT DEFERRABLE INITIALLY IMMEDIATE
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE selected_habits ADD CONSTRAINT FK_59EB8C7DA76ED395 FOREIGN KEY (user_id) REFERENCES users (id) NOT DEFERRABLE INITIALLY IMMEDIATE
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE tracking ADD CONSTRAINT FK_A87C621CA76ED395 FOREIGN KEY (user_id) REFERENCES users (id) NOT DEFERRABLE INITIALLY IMMEDIATE
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE tracking ADD CONSTRAINT FK_A87C621C9A86D2DD FOREIGN KEY (selected_habits_id) REFERENCES selected_habits (id) NOT DEFERRABLE INITIALLY IMMEDIATE
        SQL);
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql(<<<'SQL'
            CREATE SCHEMA public
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE achievement DROP CONSTRAINT FK_96737FF1A76ED395
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE habit DROP CONSTRAINT FK_44FE217212469DE2
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE own_habit DROP CONSTRAINT FK_67CB99A7A76ED395
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE own_habit DROP CONSTRAINT FK_67CB99A712469DE2
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE post DROP CONSTRAINT FK_5A8A6C8DA76ED395
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE selected_habits DROP CONSTRAINT FK_59EB8C7DE7AEB3B2
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE selected_habits DROP CONSTRAINT FK_59EB8C7D1643A4D9
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE selected_habits DROP CONSTRAINT FK_59EB8C7DA76ED395
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE tracking DROP CONSTRAINT FK_A87C621CA76ED395
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE tracking DROP CONSTRAINT FK_A87C621C9A86D2DD
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE achievement
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
            DROP TABLE post
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE selected_habits
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE tracking
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE users
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE messenger_messages
        SQL);
    }
}

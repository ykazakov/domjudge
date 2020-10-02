<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200930202124 extends AbstractMigration
{
    public function getDescription() : string
    {
        return 'Add functionality to limit the number of users in teams using team categories';
    }

    public function up(Schema $schema) : void
    {
        $this->addSql('ALTER TABLE team_category ADD max_users INT UNSIGNED DEFAULT NULL COMMENT \'Maximal number of team users (NULL - unlimited)\'');     
    }

    public function down(Schema $schema) : void
    {
        $this->addSql('ALTER TABLE team_category DROP max_users');        
    }
}

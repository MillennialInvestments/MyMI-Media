<?php
namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddCampaignFiles extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'         => ['type' => 'INT', 'constraint' => 11, 'unsigned' => true, 'auto_increment' => true],
            'slug'       => ['type' => 'VARCHAR', 'constraint' => 191],
            'path'       => ['type' => 'VARCHAR', 'constraint' => 255],
            'status'     => ['type' => 'ENUM("pending","approved","rejected")', 'default' => 'pending'],
            'created_at' => ['type' => 'DATETIME', 'null' => true],
            'updated_at' => ['type' => 'DATETIME', 'null' => true],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('campaign_files');
    }

    public function down()
    {
        $this->forge->dropTable('campaign_files');
    }
}

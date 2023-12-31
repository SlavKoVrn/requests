<?php

use yii\db\Migration;

/**
 * Class m231213_015145_create_table_requests
 */
class m231213_015145_create_table_requests extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_general_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%requests}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string(),
            'email' => $this->string(),
            "status" => "enum('Active', 'Resolved')",
            'message' => $this->text(),
            'comment' => $this->text(),
            'created_at' => $this->dateTime(),
            'updated_at' => $this->dateTime(),
        ], $tableOptions);

        $this->createIndex('idx-requests-status', '{{%requests}}', 'status');

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropIndex('idx-requests-status', '{{%requests}}');
        $this->dropTable('{{%requests}}');
    }

}

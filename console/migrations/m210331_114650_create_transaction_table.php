<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%transaction}}`.
 */
class m210331_114650_create_transaction_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%transaction}}', [
            'id' => $this->primaryKey(),
            'user_id' => $this->integer()->notNull(),
            'summa_vkalada' => $this->integer()->notNull(),
            'prosent' => $this->integer()->notNull(),
            'kolvo_tek_natch' => $this->integer(),
            'summa_natch' => $this->integer(),
            'status_deposit' => $this->integer(),
            'data' => $this->date(),
        ]);
        $this->addForeignKey('user_profile-transaction', 'user_profile', 'user_id', 'transaction', 'user_id', 'CASCADE', "CASCADE");
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%transaction}}');
    }
}

<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%murojatlar}}`.
 */
class m210331_090449_create_murojatlar_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%murojatlar}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull(),
            'phone' => $this->string()->notNull(),
            'description' => $this->text(),
            'book_name' => $this->string(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%murojatlar}}');
    }
}

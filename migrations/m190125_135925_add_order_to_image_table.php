<?php

use yii\db\Migration;

/**
 * Class m190125_135925_add_order_to_image_table
 */
class m190125_135925_add_order_to_image_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('{{%image}}', 'order', $this->integer());
        $this->createIndex('image_order_index','{{%image}}', ['order']);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('{{%image}}','order');

        return true;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190125_135925_add_order_to_image_table cannot be reverted.\n";

        return false;
    }
    */
}

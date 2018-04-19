<?php

use yii\db\Migration;

/**
 * Class m180407_032315_update_post_table
 */
class m180407_032315_update_post_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m180407_032315_update_post_table cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m180407_032315_update_post_table cannot be reverted.\n";

        return false;
    }
    */
}

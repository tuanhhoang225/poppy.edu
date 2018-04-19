<?php

use yii\db\Migration;

/**
 * Class m180331_070744_update_image_table
 */
class m180331_070744_update_image_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->dropForeignKey('fk_image_page', 'image');
        $this->dropForeignKey('fk_image_post', 'image');

        $this->addForeignKey('fk_image_post', 'image', 'post_id', 'post', 'id', 'CASCADE');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m180331_070744_update_image_table cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m180331_070744_update_image_table cannot be reverted.\n";

        return false;
    }
    */
}

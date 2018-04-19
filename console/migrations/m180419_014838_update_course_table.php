<?php

use yii\db\Migration;

/**
 * Class m180419_014838_update_course_table
 */
class m180419_014838_update_course_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
$this->addColumn('course','status',$this->integer()->defaultValue(0));
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m180419_014838_update_course_table cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m180419_014838_update_course_table cannot be reverted.\n";

        return false;
    }
    */
}

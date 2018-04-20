<?php

use yii\db\Migration;

/**
 * Class m180419_023615_update_image_table
 */
class m180419_023615_update_image_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('image','course_id',$this->integer());
        $this->addColumn('image','teacher_id',$this->integer());


        $this->addForeignKey('fk_image_course','image','course_id','course','id','CASCADE');
        $this->addForeignKey('fk_image_teacher','image','teacher_id','teacher','id','CASCADE');

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m180419_023615_update_image_table cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m180419_023615_update_image_table cannot be reverted.\n";

        return false;
    }
    */
}

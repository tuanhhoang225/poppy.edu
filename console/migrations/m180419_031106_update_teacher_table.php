<?php

use yii\db\Migration;

/**
 * Class m180419_031106_update_teacher_table
 */
class m180419_031106_update_teacher_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->renameColumn('teacher', 'image', 'images');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m180419_031106_update_teacher_table cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m180419_031106_update_teacher_table cannot be reverted.\n";

        return false;
    }
    */
}

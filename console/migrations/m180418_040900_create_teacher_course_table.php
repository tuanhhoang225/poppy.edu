<?php

use yii\db\Migration;

/**
 * Handles the creation of table `teacher_course`.
 */
class m180418_040900_create_teacher_course_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }
        $this->createTable('teacher_course', [
            'id'=>$this->primaryKey(),
            'teacher_id' => $this->integer(),
            'course_id' => $this->integer(),
        ],$tableOptions);
        $this->addForeignKey('fk_teacher_course_teacher','teacher_course','teacher_id','teacher','id','CASCADE');
        $this->addForeignKey('fk_teacher_course_course','teacher_course','course_id','course','id','CASCADE');

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('teacher_course');
    }
}

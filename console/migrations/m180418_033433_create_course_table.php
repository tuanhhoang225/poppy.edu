<?php

use yii\db\Migration;

/**
 * Handles the creation of table `course`.
 */
class m180418_033433_create_course_table extends Migration
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
        $this->createTable('course', [
            'id' => $this->primaryKey(),
            'title'=>$this->string()->notNull(),
            'content'=>$this->text(),
            'duration'=>$this->string(),
            'price'=>$this->integer(),
            'total_student'=>$this->integer(),
            'start_date'=>$this->date(),
            'study_time'=>$this->string(),
            'category_id'=>$this->integer(),
            'avatar'=>$this->string(),
            'images'=>$this->text(),
            'address'=>$this->string(),
            'slug'=>$this->string(),
            'status'=>$this->integer()->defaultValue(0)

        ],$tableOptions);
        $this->addForeignKey('fk_course_category','course','category_id','category','id','CASCADE');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('course');
    }
}

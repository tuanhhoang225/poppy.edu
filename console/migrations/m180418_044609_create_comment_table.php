<?php

use yii\db\Migration;

/**
 * Handles the creation of table `comment`.
 */
class m180418_044609_create_comment_table extends Migration
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
        $this->createTable('comment', [
            'id' => $this->primaryKey(),
            'name'=>$this->string(),
            'email'=>$this->string(),
            'content'=>$this->text(),
            'user_id'=>$this->integer(),
            'course_id'=>$this->integer(),
            'post_id'=>$this->integer(),
            'scope'=>$this->string(),
            'type'=>$this->integer()
        ],$tableOptions);
        $this->addForeignKey('fk_comment_course','comment','course_id','course','id','CASCADE');
        $this->addForeignKey('fk_comment_post','comment','post_id','post','id','CASCADE');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('comment');
    }
}

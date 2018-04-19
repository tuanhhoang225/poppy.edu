<?php

use yii\db\Migration;

/**
 * Handles the creation of table `photo_location`.
 */
class m171220_072459_create_photo_location_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%photo_location}}', [
            'id' => $this->primaryKey(),
            'title' => $this->string()->notNull(),
            'describe' => $this->string(),
            'key' => $this->string()->notNull()->unique(),
            'code' => $this->text(),
            'released' => $this->integer()->defaultValue(0),
            'slug' => $this->string()
        ], $tableOptions);
    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        $this->dropTable('vi_tri_anh');
    }
}

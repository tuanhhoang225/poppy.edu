<?php

use yii\db\Migration;

/**
 * Class m180319_184641_update_album_table
 */
class m180319_184641_update_album_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->alterColumn('album','title',$this->string()->notNull());
        $this->alterColumn('album','title',$this->string()->notNull());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m180319_184641_update_album_table cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m180319_184641_update_album_table cannot be reverted.\n";

        return false;
    }
    */
}

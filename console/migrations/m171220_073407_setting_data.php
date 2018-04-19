<?php

use yii\db\Migration;

/**
 * Class m171220_073407_setting_data
 */
class m171220_073407_setting_data extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->batchInsert('{{%setting}}', [
            'title',
            'released',
            'key',
            'slug'
        ], [
            ['Địa chỉ', 1, 'address', 'dia-chi-1'],
            ['Số điện thoại', 1, 'phone', 'so-dien-thoai-2'],
            ['Hòm thư', 1, 'email', 'hom-thu-3'],
        ]);
    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        echo "m171220_073407_category_cau_hinh_data cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m171220_073407_category_cau_hinh_data cannot be reverted.\n";

        return false;
    }
    */
}

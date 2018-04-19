<?php

use yii\db\Migration;

/**
 * Handles the creation of table `classifieds`.
 */
class m180331_070648_create_classifieds_table extends Migration
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

        $this->createTable('{{%classifieds}}', [
            'id' => $this->primaryKey(),
            'title' => $this->string()->notNull(),
            'avatar' => $this->string(),
            'seo_tool_id' => $this->integer(),
            'category_id' => $this->integer()->notNull(),
            'slug' => $this->string(),
            'describe' => $this->text()->notNull(),
            'content' => $this->text(),
            'acreage' => $this->string(),
            'views' => $this->integer()->defaultValue(0),
            'price' => $this->string(),
            'province_id' => $this->integer(),
            'district_id' => $this->integer(),
            'start_date' => $this->dateTime(),
            'expiration_date' => $this->dateTime(),
            'status' => $this->integer()->defaultValue(0),
            'user_id' => $this->integer(),
            'ad_type_id' => $this->integer(),
            'unit_id' => $this->integer(),
            'email' => $this->string(),
            'phone' => $this->string(),
            'mobile' => $this->string(),
            'address' => $this->string(),
            'contacts' => $this->string(),
            'contact_name' => $this->string(),
            'images' => $this->text()
        ], $tableOptions);

        $this->addForeignKey('fk_classifieds_province', 'classifieds', 'province_id', 'province', 'id', 'CASCADE');
        $this->addForeignKey('fk_classifieds_product', 'classifieds', 'district_id', 'district', 'id', 'CASCADE');
        $this->addForeignKey('fk_classifieds_category', 'classifieds', 'category_id', 'category', 'id', 'CASCADE');
        $this->addForeignKey('fk_classifieds_seo_tool', 'classifieds', 'seo_tool_id', 'seo_tool', 'id', 'CASCADE');
        $this->addForeignKey('fk_classifieds_user', 'classifieds', 'user_id', 'user', 'id', 'CASCADE');
        $this->addForeignKey('fk_classifieds_ad_type', 'classifieds', 'ad_type_id', 'ad_type', 'id', 'CASCADE');
        $this->addForeignKey('fk_classifieds_unit', 'classifieds', 'unit_id', 'unit', 'id', 'CASCADE');

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('classifieds');
    }
}

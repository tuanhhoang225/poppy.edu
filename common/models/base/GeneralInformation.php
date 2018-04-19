<?php

namespace common\models\base;

use Yii;

/**
 * This is the model class for table "general_information".
 *
 * @property int $id
 * @property string $site_name
 * @property string $home_page_header
 * @property string $home_page_description
 * @property string $email_notify
 * @property string $google_analytics
 * @property string $facebook_pixel
 * @property int $status
 */
class GeneralInformation extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'general_information';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['home_page_description', 'google_analytics', 'facebook_pixel'], 'string'],
            [['status'], 'integer'],
            [['site_name', 'home_page_header', 'email_notify'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'site_name' => 'Site Name',
            'home_page_header' => 'Home Page Header',
            'home_page_description' => 'Home Page Description',
            'email_notify' => 'Email Notify',
            'google_analytics' => 'Google Analytics',
            'facebook_pixel' => 'Facebook Pixel',
            'status' => 'Status',
        ];
    }
}

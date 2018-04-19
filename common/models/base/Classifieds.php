<?php

namespace common\models\base;

use Yii;

/**
 * This is the model class for table "classifieds".
 *
 * @property int $id
 * @property string $title
 * @property string $avatar
 * @property int $seo_tool_id
 * @property int $category_id
 * @property string $slug
 * @property string $describe
 * @property string $content
 * @property int $views
 * @property string $price
 * @property int $province_id
 * @property int $district_id
 * @property string $start_date
 * @property string $expiration_date
 * @property int $status
 * @property int $user_id
 * @property int $ad_type_id
 * @property int $unit_id
 * @property string $email
 * @property string $phone
 * @property string $mobile
 * @property string $address
 * @property string $contacts
 * @property string $contact_name
 * @property string $images
 *
 * @property AdType $adType
 * @property Category $category
 * @property District $district
 * @property Province $province
 * @property SeoTool $seoTool
 * @property Unit $unit
 * @property User $user
 * @property Image[] $images0
 */
class Classifieds extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'classifieds';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'category_id', 'describe'], 'required'],
            [['seo_tool_id', 'category_id', 'views', 'province_id', 'district_id', 'status', 'user_id', 'ad_type_id', 'unit_id'], 'integer'],
            [['describe', 'content', 'images'], 'string'],
            [['start_date', 'expiration_date'], 'safe'],
            [['title', 'avatar', 'slug', 'price', 'email', 'phone', 'mobile', 'address', 'contacts', 'contact_name'], 'string', 'max' => 255],
            [['ad_type_id'], 'exist', 'skipOnError' => true, 'targetClass' => AdType::className(), 'targetAttribute' => ['ad_type_id' => 'id']],
            [['category_id'], 'exist', 'skipOnError' => true, 'targetClass' => Category::className(), 'targetAttribute' => ['category_id' => 'id']],
            [['district_id'], 'exist', 'skipOnError' => true, 'targetClass' => District::className(), 'targetAttribute' => ['district_id' => 'id']],
            [['province_id'], 'exist', 'skipOnError' => true, 'targetClass' => Province::className(), 'targetAttribute' => ['province_id' => 'id']],
            [['seo_tool_id'], 'exist', 'skipOnError' => true, 'targetClass' => SeoTool::className(), 'targetAttribute' => ['seo_tool_id' => 'id']],
            [['unit_id'], 'exist', 'skipOnError' => true, 'targetClass' => Unit::className(), 'targetAttribute' => ['unit_id' => 'id']],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['user_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('backend', 'ID'),
            'title' => Yii::t('backend', 'Title'),
            'avatar' => Yii::t('backend', 'Avatar'),
            'seo_tool_id' => Yii::t('backend', 'Seo Tool ID'),
            'category_id' => Yii::t('backend', 'Category ID'),
            'slug' => Yii::t('backend', 'Slug'),
            'describe' => Yii::t('backend', 'Describe'),
            'content' => Yii::t('backend', 'Content'),
            'views' => Yii::t('backend', 'Views'),
            'price' => Yii::t('backend', 'Price'),
            'province_id' => Yii::t('backend', 'Province ID'),
            'district_id' => Yii::t('backend', 'District ID'),
            'start_date' => Yii::t('backend', 'Start Date'),
            'expiration_date' => Yii::t('backend', 'Expiration Date'),
            'status' => Yii::t('backend', 'Status'),
            'user_id' => Yii::t('backend', 'User ID'),
            'ad_type_id' => Yii::t('backend', 'Ad Type ID'),
            'unit_id' => Yii::t('backend', 'Unit ID'),
            'email' => Yii::t('backend', 'Email'),
            'phone' => Yii::t('backend', 'Phone'),
            'mobile' => Yii::t('backend', 'Mobile'),
            'address' => Yii::t('backend', 'Address'),
            'contacts' => Yii::t('backend', 'Contacts'),
            'contact_name' => Yii::t('backend', 'Contact Name'),
            'images' => Yii::t('backend', 'Images'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAdType()
    {
        return $this->hasOne(AdType::className(), ['id' => 'ad_type_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCategory()
    {
        return $this->hasOne(Category::className(), ['id' => 'category_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDistrict()
    {
        return $this->hasOne(District::className(), ['id' => 'district_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProvince()
    {
        return $this->hasOne(Province::className(), ['id' => 'province_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSeoTool()
    {
        return $this->hasOne(SeoTool::className(), ['id' => 'seo_tool_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUnit()
    {
        return $this->hasOne(Unit::className(), ['id' => 'unit_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'user_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getImages0()
    {
        return $this->hasMany(Image::className(), ['classifieds_id' => 'id']);
    }
}

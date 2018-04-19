<?php

namespace common\models\base;

use Yii;

/**
 * This is the model class for table "post".
 *
 * @property int $id
 * @property string $title
 * @property int $category_id
 * @property int $serial
 * @property string $avatar
 * @property string $describe
 * @property string $content
 * @property int $display_homepage
 * @property int $status
 * @property int $featured
 * @property int $seo_tool_id
 * @property string $slug
 * @property int $created_at
 * @property int $views
 * @property string $images
 * @property string $code
 * @property int $setting_id
 *
 * @property Album[] $albums
 * @property Image[] $images0
 * @property Category $category
 * @property SeoTool $seoTool
 * @property Setting $setting
 */
class Post extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'post';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'category_id'], 'required'],
            [['category_id', 'serial', 'display_homepage', 'status', 'featured', 'seo_tool_id', 'created_at', 'views', 'setting_id'], 'integer'],
            [['content', 'images', 'code'], 'string'],
            [['title', 'avatar', 'describe', 'slug'], 'string', 'max' => 255],
            [['category_id'], 'exist', 'skipOnError' => true, 'targetClass' => Category::className(), 'targetAttribute' => ['category_id' => 'id']],
            [['seo_tool_id'], 'exist', 'skipOnError' => true, 'targetClass' => SeoTool::className(), 'targetAttribute' => ['seo_tool_id' => 'id']],
            [['setting_id'], 'exist', 'skipOnError' => true, 'targetClass' => Setting::className(), 'targetAttribute' => ['setting_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'category_id' => 'Category ID',
            'serial' => 'Serial',
            'avatar' => 'Avatar',
            'describe' => 'Describe',
            'content' => 'Content',
            'display_homepage' => 'Display Homepage',
            'status' => 'Status',
            'featured' => 'Featured',
            'seo_tool_id' => 'Seo Tool ID',
            'slug' => 'Slug',
            'created_at' => 'Created At',
            'views' => 'Views',
            'images' => 'Images',
            'code' => 'Code',
            'setting_id' => 'Setting ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAlbums()
    {
        return $this->hasMany(Album::className(), ['post_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getImages0()
    {
        return $this->hasMany(Image::className(), ['post_id' => 'id']);
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
    public function getSeoTool()
    {
        return $this->hasOne(SeoTool::className(), ['id' => 'seo_tool_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSetting()
    {
        return $this->hasOne(Setting::className(), ['id' => 'setting_id']);
    }
}

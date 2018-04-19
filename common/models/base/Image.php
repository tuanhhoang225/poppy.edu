<?php

namespace common\models\base;

use Yii;

/**
 * This is the model class for table "image".
 *
 * @property int $id
 * @property string $title
 * @property string $avatar
 * @property string $sub_photo
 * @property int $photo_location_id
 * @property int $serial
 * @property string $link
 * @property string $describe
 * @property int $featured
 * @property string $content
 * @property int $post_id
 * @property int $album_id
 * @property int $category_id
 * @property int $product_id
 * @property int $classifieds_id
 * @property int $setting_id
 * @property int $status
 * @property string $code
 * @property int $course_id
 * @property int $teacher_id
 *
 * @property Album $album
 * @property Category $category
 * @property Classifieds $classifieds
 * @property Course $course
 * @property PhotoLocation $photoLocation
 * @property Post $post
 * @property Product $product
 * @property Setting $setting
 * @property Teacher $teacher
 */
class Image extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'image';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['avatar'], 'required'],
            [['photo_location_id', 'serial', 'featured', 'post_id', 'album_id', 'category_id', 'product_id', 'classifieds_id', 'setting_id', 'status', 'course_id', 'teacher_id'], 'integer'],
            [['content', 'code'], 'string'],
            [['title', 'avatar', 'sub_photo', 'link', 'describe'], 'string', 'max' => 255],
            [['album_id'], 'exist', 'skipOnError' => true, 'targetClass' => Album::className(), 'targetAttribute' => ['album_id' => 'id']],
            [['category_id'], 'exist', 'skipOnError' => true, 'targetClass' => Category::className(), 'targetAttribute' => ['category_id' => 'id']],
            [['classifieds_id'], 'exist', 'skipOnError' => true, 'targetClass' => Classifieds::className(), 'targetAttribute' => ['classifieds_id' => 'id']],
            [['course_id'], 'exist', 'skipOnError' => true, 'targetClass' => Course::className(), 'targetAttribute' => ['course_id' => 'id']],
            [['photo_location_id'], 'exist', 'skipOnError' => true, 'targetClass' => PhotoLocation::className(), 'targetAttribute' => ['photo_location_id' => 'id']],
            [['post_id'], 'exist', 'skipOnError' => true, 'targetClass' => Post::className(), 'targetAttribute' => ['post_id' => 'id']],
            [['product_id'], 'exist', 'skipOnError' => true, 'targetClass' => Product::className(), 'targetAttribute' => ['product_id' => 'id']],
            [['setting_id'], 'exist', 'skipOnError' => true, 'targetClass' => Setting::className(), 'targetAttribute' => ['setting_id' => 'id']],
            [['teacher_id'], 'exist', 'skipOnError' => true, 'targetClass' => Teacher::className(), 'targetAttribute' => ['teacher_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'title' => Yii::t('app', 'Title'),
            'avatar' => Yii::t('app', 'Avatar'),
            'sub_photo' => Yii::t('app', 'Sub Photo'),
            'photo_location_id' => Yii::t('app', 'Photo Location ID'),
            'serial' => Yii::t('app', 'Serial'),
            'link' => Yii::t('app', 'Link'),
            'describe' => Yii::t('app', 'Describe'),
            'featured' => Yii::t('app', 'Featured'),
            'content' => Yii::t('app', 'Content'),
            'post_id' => Yii::t('app', 'Post ID'),
            'album_id' => Yii::t('app', 'Album ID'),
            'category_id' => Yii::t('app', 'Category ID'),
            'product_id' => Yii::t('app', 'Product ID'),
            'classifieds_id' => Yii::t('app', 'Classifieds ID'),
            'setting_id' => Yii::t('app', 'Setting ID'),
            'status' => Yii::t('app', 'Status'),
            'code' => Yii::t('app', 'Code'),
            'course_id' => Yii::t('app', 'Course ID'),
            'teacher_id' => Yii::t('app', 'Teacher ID'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAlbum()
    {
        return $this->hasOne(Album::className(), ['id' => 'album_id']);
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
    public function getClassifieds()
    {
        return $this->hasOne(Classifieds::className(), ['id' => 'classifieds_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCourse()
    {
        return $this->hasOne(Course::className(), ['id' => 'course_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPhotoLocation()
    {
        return $this->hasOne(PhotoLocation::className(), ['id' => 'photo_location_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPost()
    {
        return $this->hasOne(Post::className(), ['id' => 'post_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProduct()
    {
        return $this->hasOne(Product::className(), ['id' => 'product_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSetting()
    {
        return $this->hasOne(Setting::className(), ['id' => 'setting_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTeacher()
    {
        return $this->hasOne(Teacher::className(), ['id' => 'teacher_id']);
    }
}

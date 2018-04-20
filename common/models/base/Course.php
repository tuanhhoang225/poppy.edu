<?php

namespace common\models\base;

use Yii;

/**
 * This is the model class for table "course".
 *
 * @property int $id
 * @property string $title
 * @property string $content
 * @property string $duration
 * @property int $price
 * @property int $total_student
 * @property string $start_date
 * @property string $study_time
 * @property int $category_id
 * @property string $avatar
 * @property string $images
 * @property string $address
 * @property int $status
 *
 * @property Comment[] $comments
 * @property Category $category
 * @property Image[] $images0
 * @property TeacherCourse[] $teacherCourses
 */
class Course extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'course';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title'], 'required'],
            [['content', 'images'], 'string'],
            [['price', 'total_student', 'category_id', 'status'], 'integer'],
            [['start_date'], 'safe'],
            [['title', 'duration', 'study_time', 'avatar', 'address'], 'string', 'max' => 255],
            [['category_id'], 'exist', 'skipOnError' => true, 'targetClass' => Category::className(), 'targetAttribute' => ['category_id' => 'id']],
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
            'content' => Yii::t('app', 'Content'),
            'duration' => Yii::t('app', 'Duration'),
            'price' => Yii::t('app', 'Price'),
            'total_student' => Yii::t('app', 'Total Student'),
            'start_date' => Yii::t('app', 'Start Date'),
            'study_time' => Yii::t('app', 'Study Time'),
            'category_id' => Yii::t('app', 'Category ID'),
            'avatar' => Yii::t('app', 'Avatar'),
            'images' => Yii::t('app', 'Images'),
            'address' => Yii::t('app', 'Address'),
            'status' => Yii::t('app', 'Status'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getComments()
    {
        return $this->hasMany(Comment::className(), ['course_id' => 'id']);
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
    public function getImages0()
    {
        return $this->hasMany(Image::className(), ['course_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTeacherCourses()
    {
        return $this->hasMany(TeacherCourse::className(), ['course_id' => 'id']);
    }
}

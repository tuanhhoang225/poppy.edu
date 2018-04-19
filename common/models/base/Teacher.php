<?php

namespace common\models\base;

use Yii;

/**
 * This is the model class for table "teacher".
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property string $content
 * @property int $total_courses
 * @property string $avatar
 * @property string $image
 * @property string $phone
 * @property string $address
 *
 * @property TeacherCourse[] $teacherCourses
 */
class Teacher extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'teacher';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['content', 'image'], 'string'],
            [['total_courses'], 'integer'],
            [['name', 'email', 'avatar', 'phone', 'address'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'name' => Yii::t('app', 'Name'),
            'email' => Yii::t('app', 'Email'),
            'content' => Yii::t('app', 'Content'),
            'total_courses' => Yii::t('app', 'Total Courses'),
            'avatar' => Yii::t('app', 'Avatar'),
            'image' => Yii::t('app', 'Image'),
            'phone' => Yii::t('app', 'Phone'),
            'address' => Yii::t('app', 'Address'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTeacherCourses()
    {
        return $this->hasMany(TeacherCourse::className(), ['teacher_id' => 'id']);
    }
}

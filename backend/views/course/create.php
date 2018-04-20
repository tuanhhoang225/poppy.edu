<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Course */
/* @var $teachers common\models\TeacherCourse */


$this->title = Yii::t('app', 'Create Course');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Courses'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="course-create">

    <div class="row">
        <div class="col-md-12">
            <?= $this->render('_form', [
                'model' => $model,
                'teachers'=>$teachers
            ]) ?>
        </div>
    </div>

</div>

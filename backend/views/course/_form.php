<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\Url;
use yii\helpers\ArrayHelper;
use common\helpers\FunctionHelper;
use common\models\Category;
use common\models\Teacher;

/* @var $this yii\web\View */
/* @var $model common\models\Course */
/* @var $teachers common\models\TeacherCourse */

/* @var $form yii\widgets\ActiveForm */
?>

<div class="course-form">
    <?php $form = ActiveForm::begin(); ?>
    <div class="page-heading page-heading-md">
        <h2 class="header__main">
            <span class="breadcrumb hidden-xs">
                <i class="fa fa-folder"></i>
            </span>
            <span class="title">
                <a href="<?= Url::to(['index']) ?>"><?= Yii::t('backend', 'Khóa Học') ?></a>
            </span>
            <span>/</span>
            <span class="title">
                <?= Yii::t('backend', 'Create') ?>
            </span>
        </h2>
        <div class="header-right">
            <div class="form-group">
                <?= Html::submitButton('<i class="fa fa-check"></i> ' . Yii::t('app', 'Submit'), ['class' => 'btn btn-primary pull-right', 'onclick' => 'getImages()',]) ?>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="box box-primary">
                <div class="box-header">
                    <h3 class="box-title"><?= Yii::t('app', 'Basic information') ?></h3>
                </div>
                <div class="box-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <?= $form->field($model, 'title')->textInput() ?>

                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <?= $form->field($model, 'category_id')->dropDownList(
                                    ArrayHelper::map(Category::find()->where(['!=', 'status', '1'])->all(), 'id', 'title'),
                                    [
                                        'prompt' => Yii::t('backend', '-- Chọn category --'),
                                        'id' => 'categories'
                                    ]
                                ) ?>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <?= $form->field($teachers, 'teacher_id')->dropDownList(
                                    ArrayHelper::map(Teacher::find()->all(), 'id', 'name'),
                                    [
                                        'prompt' => Yii::t('backend', '-- Chọn giáo viên --'),
                                    ]
                                ) ?>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <?= $form->field($model, 'address')->textInput() ?>
                            </div>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <?= $form->field($model, 'duration')->textInput() ?>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <?= $form->field($model, 'price')->textInput() ?>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <?= $form->field($model, 'total_student')->textInput() ?>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <?= $form->field($model, 'start_date')->input('date') ?>
                            </div>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <?= $form->field($model, 'status')->checkbox(['class' => 'minimal none-action'])->label(false) ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-12">
            <div class="box box-info">
                <div class="box-header">
                    <h3 class="box-title"><?= Yii::t('backend', 'Content Details') ?></h3>
                </div>
                <div class="box-body">
                    <div class="form-group">
                        <?= $form->field($model, 'content')->textarea(['id' => 'content']) ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <div class="box box-success">
                <div class="box-header">
                    <h3 class="box-title"><?= Yii::t('app', 'Images') ?></h3>
                </div>
                <div class="box-body">
                    <div id="list-img-temp" class="thumbnails ui-sortable" style="display: none">
                        <div class="file-preview-frame krajee-default  kv-preview-thumb">
                            <div class="kv-file-content">
                                <img src="" class="kv-preview-data file-preview-image">
                            </div>
                            <div class="file-thumbnail-footer">
                                <div class="file-footer-caption">
                                    <span class="caption"></span>
                                </div>
                                <div class="file-upload-indicator" title="Not uploaded yet">
                                    <i class="glyphicon glyphicon-hand-down text-warning"></i>
                                </div>
                                <div class="file-actions">
                                    <div class="file-footer-buttons">
                                        <button type="button" class="kv-file-zoom btn btn-xs btn-default"
                                                onclick="deleteFile(event)">
                                            <i class="glyphicon glyphicon-trash"></i>
                                        </button>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="list-img" class="thumbnails ui-sortable">
                        <?php if (isset($images)): foreach ($images as $key => $value): ?>
                            <div class="file-preview-frame krajee-default  kv-preview-thumb">
                                <div class="kv-file-content">
                                    <img src="<?= $value['avatar'] ?>" class="kv-preview-data file-preview-image">
                                </div>
                                <div class="file-thumbnail-footer">
                                    <div class="file-footer-caption" title="kitchen_adventurer_lemon.jpg">
                                        <?= $value['avatar'] ?>
                                    </div>
                                    <div class="file-upload-indicator" title="Not uploaded yet">
                                        <i class="glyphicon glyphicon-hand-down text-warning"></i>
                                    </div>
                                    <div class="file-actions">
                                        <div class="file-footer-buttons">
                                            <button type="button" class="btn btn-xs btn-default"
                                                    onclick="deleteFile(event)">
                                                <i class="glyphicon glyphicon-trash"></i>
                                            </button>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; endif; ?>
                    </div>
                    <div class="spanButtonPlaceholder block-upload-item"
                         style="position: relative; overflow: hidden;margin: 10px;">
                        <p>(Click để tải ảnh<br> hoặc kéo thả ảnh vào đây)</p>
                        <input class="kv-file-drop-zone" multiple="multiple" type="file" name="file">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="form-group">
        <?= $form->field($model, 'images')->hiddenInput(['id' => 'images'])->label(false) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

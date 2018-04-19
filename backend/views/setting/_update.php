<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\Url;
use backend\assets\SettingAsset;

SettingAsset::register($this);

/* @var $this yii\web\View */
/* @var $model common\models\Page */
/* @var $images \common\models\Image */
/* @var $form yii\widgets\ActiveForm */

?>

<div class="page-form">
    <?php $form = ActiveForm::begin(); ?>
    <div class="page-heading page-heading-md">
        <h2 class="header__main">
            <span class="breadcrumb hidden-xs">
                <i class="fa fa-cog"></i>
            </span>
            <span class="title">
                <?= Yii::t('backend', 'Setting') ?>
            </span>
        </h2>
        <div class="header-right">
            <div class="form-group">
                <?= Html::submitButton('<i class="fa fa-check"></i> ' . Yii::t('app', 'Submit'), ['class' => 'btn btn-primary pull-right', 'onclick' => 'getImages()',]) ?>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4 col-lg-3">
            <h4>Thông tin cấu hình</h4>
            <p class="text-muted">Nhập tiêu đề và các mô tả cho cấu hình</p>
        </div>
        <div class="col-md-8 col-lg-9">
            <div class="box box-primary">
                <div class="box-header">
                    <h3 class="box-title">
                        <?= Yii::t('app', 'Basic information') ?>
                    </h3>
                </div>
                <div class="box-body">
                    <div class="form-group">
                        <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>
                    </div>
                    <div class="form-group">
                        <?= $form->field($model, 'describe')->textarea(['rows' => 2]) ?>
                    </div>
                    <div class="form-group">
                        <?= $form->field($model, 'link')->textInput(['maxlength' => true]) ?>
                    </div>
                </div>
            </div>
            <div class="box box-primary">
                <div class="box-header">
                    <h3 class="box-title">
                        <?= Yii::t('app', 'Shows') ?>
                    </h3>
                </div>
                <div class="box-body">
                    <div class="form-group">
                        <?= $form->field($model, 'status')->checkbox(['class' => 'minimal none-action'])->label(false) ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4 col-lg-3">
            <h4>Hình ảnh</h4>
            <p class="text-muted">Thêm hình ảnh cho cấu hình nếu có</p>
        </div>
        <div class="col-md-8 col-lg-9">
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
                                <div class="file-upload-indicator">
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
                                    <div class="file-footer-caption" title="">
                                        <a href="#" class="editable" data-name="image#title" data-type="text"
                                           data-pk="<?= $value['id'] ?>" data-title="Enter title"
                                           data-url="<?= Url::to(['ajax/edit-column']) ?>">
                                            <?= $value['title'] ?>
                                        </a>
                                    </div>
                                    <div class="file-upload-indicator">
                                        <button type="button" class="btn btn-xs btn-default"
                                                onclick="load_content_image(<?= $value['id'] ?>)"
                                                data-toggle="modal" data-target="#content-image">
                                            <i class="fa fa-edit"></i>
                                        </button>
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
                    <div class="droptext">Đăng ảnh thật nhanh bằng cách kéo và thả ảnh vào khung. Thay đổi vị trí
                        của
                        ảnh bằng cách kéo ảnh vào vị trí mà bạn muốn!
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4 col-lg-3">
            <h4>Chi tiết cấu hình</h4>
            <p class="text-muted">Viết nội dung chi tiết cho cấu hình để hiển thị</p>
        </div>
        <div class="col-md-8 col-lg-9">
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
    </div>
    <div class="form-group">
        <?= $form->field($model, 'images')->hiddenInput(['id' => 'images'])->label(false) ?>
    </div>
    <div class="form-group" style="margin-right: 10px;">
        <?= Html::submitButton('<i class="fa fa-check"></i> ' . Yii::t('app', 'Submit'), ['class' => 'btn btn-primary pull-right', 'onclick' => 'getImages()',]) ?>
    </div>
    <?php ActiveForm::end(); ?>
</div>

<div id="content-image" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Content Image</h4>
            </div>
            <div class="modal-body">
                <textarea title="" name="" id="describe" cols="30" rows="10">
                </textarea>
            </div>
            <div class="modal-footer">
                <input type="hidden" id="id-image">
                <button type="button" class="btn btn-primary" onclick="save_content_image()" data-dismiss="modal">
                    <i class="fa fa-check"></i>
                    Xác nhận
                </button>
            </div>
        </div>
    </div>
</div>
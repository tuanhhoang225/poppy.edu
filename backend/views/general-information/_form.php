<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use common\models\Category;

/* @var $this yii\web\View */
/* @var $model common\models\Category */
/* @var $seo \common\models\SeoTool */
/* @var $form yii\widgets\ActiveForm */

?>

<div class="category-form">
    <?php $form = ActiveForm::begin(); ?>
    <div class="page-heading page-heading-md">
        <h2 class="header__main">
            <span class="breadcrumb hidden-xs">
                <i class="fa fa-bookmark"></i>
            </span>
            <span class="title">
                <?= Yii::t('backend', 'General information') ?>
            </span>
        </h2>
        <div class="header-right">
            <div class="form-group">
                <?= Html::submitButton('<i class="fa fa-check"></i> ' . Yii::t('backend', 'Submit'), ['class' => 'btn btn-primary pull-right', 'onclick' => 'getImages()',]) ?>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4 col-lg-3 margin-md-bottom">
            <h4>Thông tin website</h4>
            <p class="text-muted">Thông tin được sử dụng để khác hàng liên hệ đến bạn.</p>
        </div>
        <div class="col-md-8 col-lg-9">
            <div class="box box-primary">
                <div class="box-header">
                    <h3 class="box-title">
                        <?= Yii::t('backend', 'Basic information') ?>
                    </h3>
                </div>
                <div class="box-body">
                    <div class="form-group">
                        <?= $form->field($model, 'site_name')->textInput(['placeholder' => 'Enter the website name'])->label(Yii::t('backend', 'Site name')) ?>
                    </div>
                    <div class="form-group">
                        <?= $form->field($model, 'home_page_header')->textInput(['placeholder' => Yii::t('backend', 'Enter the title of the home page')])->label(Yii::t('backend', 'Home Page Header')) ?>
                    </div>
                    <div class="form-group">
                        <?= $form->field($model, 'home_page_description')->textarea(['rows' => 2, 'placeholder' => 'Nhập một mô tả để nâng cao xếp hạng trên công cụ tìm kiếm như Google.'])->label(Yii::t('backend', 'Home Page Description')) ?>
                    </div>
                    <div class="form-group">
                        <label for=""><?= Yii::t('backend','Email Notify') ?></label>

                        <?= $form->field($model, 'email_notify')->textInput(['placeholder' => 'Nhập email gửi thông báo'])->label(false) ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-lg-3 margin-md-bottom">
            <h4>Google Analytics</h4>
            <p class="text-muted">
                Nhập mã Google Analytics để bạn có thể theo dõi các thống kê về truy cập của
                website.
            </p>
        </div>
        <div class="col-md-8 col-lg-9">
            <div class="box box-primary">
                <div class="box-body">
                    <div class="form-group">
                        <label for="">Google Analytics</label>
                        <?= $form->field($model, 'google_analytics')->textarea(['rows' => 3, 'placeholder' => 'Nhập mã Google Analytics tại đây'])->label(false) ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-lg-3 margin-md-bottom">
            <h4>Facebook Pixel</h4>
            <p class="text-muted">Facebook Pixel giúp bạn tạo chiến dịch quảng cáo để tìm khách hàng mới.</p>
        </div>
        <div class="col-md-8 col-lg-9">
            <div class="box box-primary">
                <div class="box-body">
                    <div class="form-group">
                        <label for="">Facebook pixel</label>
                        <?= $form->field($model, 'facebook_pixel')->textarea(['rows' => 3, 'placeholder' => 'Nhập Facebook Pixcel ID tại đây'])->label(false) ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="form-group" style="margin-right: 12px;">
        <?= Html::submitButton('<i class="fa fa-check"></i> ' . Yii::t('backend', 'Submit'), ['class' => 'btn btn-primary pull-right', 'onclick' => 'getImages()',]) ?>
    </div>
    <?php ActiveForm::end(); ?>
</div>
<?php

use yii\widgets\ActiveForm;
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model \backend\models\InformationForm */

?>

<section class="content-header">
    <h1>
        <?= Yii::t('backend', 'General information'); ?>
    </h1>
</section>
<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="information-form">
                <?php $form = ActiveForm::begin(); ?>
                <div class="page-heading page-heading-md">
                    <h2 class="header__main">
                        <span class="breadcrumb hidden-xs">
                            <i class="fa fa-user"></i>
                        </span>
                        <span class="title">
                            <?= Yii::t('backend', 'Information') ?>
                        </span>
                    </h2>
                    <div class="header-right">
                        <div class="form-group">
                            <?= Html::submitButton('<i class="fa fa-check"></i> ' . Yii::t('app', 'Submit'), ['class' => 'btn btn-primary pull-right', 'onclick' => 'getImages()',]) ?>
                        </div>
                    </div>
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
                                <?= $form->field($model, 'first_name')->textInput(['maxlength' => true]) ?>
                            </div>
                            <div class="form-group" style="margin-right: 10px;">
                                <?= Html::submitButton('<i class="fa fa-check"></i> ' . Yii::t('app', 'Submit'), ['class' => 'btn btn-primary pull-right']) ?>
                            </div>
                        </div>
                    </div>
                </div>
                <?php ActiveForm::end(); ?>
            </div>
        </div>
    </div>
</section>
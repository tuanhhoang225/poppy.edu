<?php

use yii\helpers\Url;
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $locations common\models\PhotoLocation */

$this->title = Yii::t('backend', 'Photo Locations');

?>

<section class="content-header">
    <div class="page-heading page-heading-md">
        <h2 class="header__main">
            <span class="breadcrumb hidden-xs">
                <i class="fa fa-picture-o"></i>
            </span>
            <span class="title">
                <?= Yii::t('backend', 'Photo Locations') ?>
            </span>
        </h2>
    </div>
</section>
<section class="content" style="margin-top: 30px;">
    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title"></h3>
                    <div class="pull-right">
                        <div class="btn-group pull-right" style="margin-right: 10px">
                            <a class="btn btn-sm btn-twitter"><i class="fa fa-download"></i> Export</a>
                            <button type="button" class="btn btn-sm btn-twitter dropdown-toggle" data-toggle="dropdown">
                                <span class="caret"></span>
                                <span class="sr-only">Toggle Dropdown</span>
                            </button>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="" target="_blank">All</a></li>
                                <li><a href="" target="_blank">Current page</a></li>
                                <li><a href="" target="_blank" class="export-selected">Selected rows</a></li>
                            </ul>
                        </div>
                        <div class="btn-group pull-right" style="margin-right: 10px">
                            <a href="<?= Url::to(['photo-location/create']) ?>" class="btn btn-sm btn-success">
                                <i class="fa fa-save"></i> <?= Yii::t('backend', 'New') ?>
                            </a>
                        </div>
                    </div>
                    <div class="btn-group">
                        <a class="btn btn-sm btn-default"> Action</a>
                        <button type="button" class="btn btn-sm btn-default dropdown-toggle" data-toggle="dropdown">
                            <span class="caret"></span>
                            <span class="sr-only">Toggle Dropdown</span>
                        </button>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="#" class="grid-batch-0">Delete</a></li>
                        </ul>
                    </div>
                </div>
                <div class="box-body table-responsive no-padding">
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th style="padding-left: 15px;">
                                <input title="" type="checkbox" class="minimal">
                            </th>
                            <th>STT</th>
                            <th><?= Yii::t('backend', 'Title') ?></th>
                            <th><?= Yii::t('backend', 'Code') ?></th>
                            <th><?= Yii::t('backend', 'Released') ?></th>
                            <th><?= Yii::t('backend', 'Action') ?></th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($locations as $key => $value): ?>
                            <tr>
                                <td style="padding-left: 15px;">
                                    <input title="" data-id="<?= $value['id'] ?>" type="checkbox" class="minimal">
                                </td>
                                <td>
                                    <?= $key + 1 ?>
                                </td>
                                <td>
                                    <?= $value['title'] ?>
                                </td>
                                <td>
                                    <?= $value['key'] ?>
                                </td>
                                <td>
                                    <div class="bootstrap-switch bootstrap-switch-wrapper bootstrap-switch-mini"
                                         style="border:none">
                                        <input data-id="<?= $value['id'] ?>" data-api="ajax/release"
                                               data-table="photo-location"
                                               type="checkbox" <?= $value['released'] ? 'checked="checked"' : '' ?>
                                               title="" name="switch-checkbox">
                                    </div>
                                </td>
                                <td>
                                    <a href="<?= Url::to(['photo-location/update', 'id' => $value['id']]) ?>">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                    <?= Html::a(Yii::t('backend', '<i class="fa fa-trash-o"></i>'), ['delete', 'id' => $value->id], [
                                        'data' => [
                                            'confirm' => Yii::t('backend', 'Are you sure you want to delete this item?'),
                                            'method' => 'post',
                                        ],
                                    ]) ?>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>
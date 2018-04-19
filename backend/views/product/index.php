<?php

use yii\helpers\Url;
use yii\helpers\Html;
use yii\widgets\LinkPager;

/* @var $this yii\web\View */
/* @var $products common\models\Product */
/* @var $pages \yii\data\Pagination */

$this->title = Yii::t('backend', 'Categories');

?>

<section class="content-header">
    <h1>
        <?= Yii::t('backend', 'Categories') ?>
        <small></small>
    </h1>
</section>
<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="nav-tabs-custom">
                <ul class="nav nav-tabs">
                    <li class="active">
                        <a href="#tab_1" data-toggle="tab" aria-expanded="true">
                            Active
                        </a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane active" id="tab_1">
                        <div class="box-header">
                            <div class="btn-group pull-right">
                                <div class="pull-right">
                                    <div class="btn-group pull-right" style="margin-right: 10px">
                                        <a class="btn btn-sm btn-twitter"><i class="fa fa-download"></i> Export</a>
                                        <button type="button" class="btn btn-sm btn-twitter dropdown-toggle"
                                                data-toggle="dropdown">
                                            <span class="caret"></span>
                                            <span class="sr-only">Toggle Dropdown</span>
                                        </button>
                                        <ul class="dropdown-menu" role="menu">
                                            <li><a href="" target="_blank">All</a></li>
                                            <li><a href="" target="_blank">Current page</a></li>
                                            <li><a href="" target="_blank" class="export-selected">Selected rows</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="btn-group pull-right" style="margin-right: 10px">
                                        <a href="<?= Url::to(['create']) ?>" class="btn btn-sm btn-success">
                                            <i class="fa fa-save"></i> <?= Yii::t('backend', 'New') ?>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="btn-group">
                                <a class="btn btn-sm btn-default"> Action</a>
                                <button type="button" class="btn btn-sm btn-default dropdown-toggle"
                                        data-toggle="dropdown">
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
                                    <th><?= Yii::t('backend', 'Action') ?></th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php foreach ($products as $key => $value): ?>
                                    <tr>
                                        <td style="padding-left: 15px;">
                                            <input title="" data-id="<?= $value['id'] ?>" type="checkbox"
                                                   class="minimal">
                                        </td>
                                        <td>
                                            <?= $key + 1 ?>
                                        </td>
                                        <td>
                                            <?= $value['title'] ?>
                                        </td>
                                        <td>
                                            <a href="<?= Url::to(['update', 'id' => $value['id']]) ?>">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                            <a href="<?= Url::to(['album', 'id' => $value['id']]) ?>">
                                                <i class="fa fa-folder-o"></i>
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
            <div class="row" style="padding: 0 15px!important;margin-bottom: 20px;">
                <div class="col-md-12">
                    <div class="product-pagination text-center">
                        <div class="header-subject">
                            <?php
                            echo LinkPager::widget(['pagination' => $pages,]);
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
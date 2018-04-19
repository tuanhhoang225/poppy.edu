<?php

use yii\helpers\Url;
use backend\assets\CategoryAsset;
use common\helpers\FunctionHelper;

CategoryAsset::register($this);

/* @var $this yii\web\View */
/* @var $categories common\models\Category */

$this->title = Yii::t('backend', 'Categories');

?>

<section class="content-header">
    <div class="page-heading page-heading-md">
        <h2 class="header__main">
            <span class="breadcrumb hidden-xs">
                <i class="fa fa-picture-o"></i>
            </span>
            <span class="title">
                <?= Yii::t('backend', 'Categories') ?>
            </span>
        </h2>
    </div>
</section>
<section class="content" style="margin-top: 30px;">
    <div class="row">
        <div class="col-md-12">
            <div class="nav-tabs-custom">
                <ul class="nav nav-tabs">
                    <li class="active">
                        <a href="#tab_2" data-toggle="tab" aria-expanded="false">
                            Detail
                        </a>
                    </li>
                    <li class="">
                        <a href="#tab_1" data-toggle="tab" aria-expanded="true">
                            Quick view
                        </a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane" id="tab_1">
                        <div class="box-header">
                            <div class="btn-group">
                                <a class="btn btn-primary btn-sm tree-5aa383cc537d1-tree-tools" data-action="expand">
                                    <i class="fa fa-plus-square-o"></i>
                                    <?= Yii::t('backend', 'Expand') ?>
                                </a>
                                <a class="btn btn-primary btn-sm tree-5aa383cc537d1-tree-tools" data-action="collapse">
                                    <i class="fa fa-minus-square-o"></i>
                                    <?= Yii::t('backend', 'Collapse') ?>
                                </a>
                            </div>
                            <div class="btn-group">
                                <a class="btn btn-info btn-sm  tree-5aa383cc537d1-save">
                                    <i class="fa fa-save"></i>
                                    <?= Yii::t('backend', 'Save') ?>
                                </a>
                            </div>
                            <div class="btn-group">
                                <a href="<?= Url::to(['category/index']) ?>"
                                   class="btn btn-warning btn-sm">
                                    <i class="fa fa-refresh"></i>
                                    <?= Yii::t('backend', 'Refresh') ?>
                                </a>
                            </div>
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
                                        <a href="<?= Url::to(['category/create']) ?>" class="btn btn-sm btn-success">
                                            <i class="fa fa-save"></i> <?= Yii::t('backend', 'New') ?>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="box-body table-responsive no-padding">
                            <div class="dd" id="tree-5aa383cc537d1">
                                <?= FunctionHelper::show_categories_nestable($categories) ?>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane active" id="tab_2">
                        <div class="box-header">
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
                                        <li><a href="" target="_blank" class="export-selected">Selected rows</a></li>
                                    </ul>
                                </div>
                                <div class="btn-group pull-right" style="margin-right: 10px">
                                    <a href="<?= Url::to(['category/create']) ?>" class="btn btn-sm btn-success">
                                        <i class="fa fa-save"></i> <?= Yii::t('backend', 'New') ?>
                                    </a>
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
                                    <th><?= Yii::t('backend', 'Code') ?></th>
                                    <th><?= Yii::t('backend', 'Status') ?></th>
                                    <th><?= Yii::t('backend', 'Action') ?></th>
                                </tr>
                                </thead>
                                <tbody>
                                <?= FunctionHelper::show_categories_table($categories) ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
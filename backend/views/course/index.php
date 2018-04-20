<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\Url;
use common\models\TeacherCourse;
/* @var $this yii\web\View */
/* @var $courses common\models\Course */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Courses');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="course-index">

    <section class="content-header">
        <div class="page-heading page-heading-md">
            <h2 class="header__main">
            <span class="breadcrumb hidden-xs">
                <i class="fa fa-list-alt"></i>
            </span>
                <span class="title">
                <?= Yii::t('backend', 'Classifieds') ?>
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
                                <a href="<?= Url::to(['course/create']) ?>" class="btn btn-sm btn-success">
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
                                <th><?= Yii::t('backend', 'Tiêu đề') ?></th>
                                <th><?= Yii::t('backend', 'Giảng viên') ?></th>
                                <th><?= Yii::t('backend', 'Giá') ?></th>
                                <th><?= Yii::t('backend', 'Thời gian') ?></th>
                                <th><?= Yii::t('backend', 'Phát hành') ?></th>
                                <th><?= Yii::t('backend', 'Action') ?></th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($courses as $key => $value): ?>
                                <tr>
                                    <td style="padding-left: 15px;">
                                        <input title="" data-id="<?= $value['id'] ?>" type="checkbox" class="minimal">
                                    </td>
                                    <td>
                                        <?= $key + 1 ?>
                                    </td>
                                    <td>
                                        <a data-toggle="modal" data-target="#myModal" data-title="content">
                                        <?= $value['title'] ?>
                                        </a>
                                        <div id="myModal" class="modal fade">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                        <h4 class="modal-title">Thông Tin Khóa Học</h4>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form role="form">
                                                            <?= $value['content']?>
                                                        </form>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <?= TeacherCourse::find()->where(['=','course_id',$value['id']])->one()['teacher_id']?>
                                    </td>
                                    <td>
                                        <?= $value['price'] ?>
                                    </td>
                                    <td>
                                        <?= $value['duration'] ?>
                                    </td>
                                    <td>
                                        <div class="bootstrap-switch bootstrap-switch-wrapper bootstrap-switch-mini"
                                             style="border:none">
                                            <input data-id="<?= $value['id'] ?>" data-api="ajax/enable-column"
                                                   data-table="course" data-column="status"
                                                   type="checkbox" <?= $value['status'] ? 'checked="checked"' : '' ?>
                                                   title="" name="switch-checkbox">
                                        </div>
                                    </td>
                                    <td>
                                        <a href="<?= Url::to(['course/update', 'id' => $value['id']]) ?>">
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
</div>

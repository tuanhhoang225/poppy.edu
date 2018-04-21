<?php

use yii\helpers\Url;

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\web\NotFoundHttpException;
use backend\assets\AdminAsset;
use common\models\User;

AdminAsset::register($this);

$user = null;

if (!Yii::$app->user->isGuest) {
    $user = findModel(Yii::$app->user->identity->getId());
}

function findModel($id)
{
    if (($model = User::findOne($id)) !== null) {
        return $model;
    } else {
        throw new NotFoundHttpException('The requested page does not exist.');
    }
}

?>
<?php $this->beginPage() ?>
    <!DOCTYPE html>
    <html lang="<?= Yii::$app->language ?>">
    <head>
        <meta charset="<?= Yii::$app->charset ?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <?= Html::csrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>
        <?php $this->head() ?>
        <link rel="stylesheet"
              href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
    </head>
    <body class="skin-blue sidebar-mini sidebar-mini-expand-feature fixed">
    <?php $this->beginBody() ?>
    <div class="wrapper" style="overflow: hidden">
        <header class="main-header">
            <a href="" class="logo">
                <span class="logo-mini"><b>A</b>RT</span>
                <span class="logo-lg"><b>Admin</b>RT</span>
            </a>
            <nav class="navbar navbar-static-top">
                <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                    <span class="sr-only">Toggle navigation</span>
                </a>
                <div class="navbar-custom-menu">
                    <ul class="nav navbar-nav">
                        <li class="dropdown user user-menu">
                            <a href="" class="dropdown-toggle" data-toggle="dropdown">
                                <img src="/uploads/core/images/user2-160x160.jpg" class="user-image" alt="User Image">
                                <span class="hidden-xs"><?= $user['last_name'] ?></span>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="user-header">
                                    <img src="/uploads/core/images/user2-160x160.jpg" class="img-circle"
                                         alt="User Image">
                                    <p>
                                        <?= $user['last_name'] ?>
                                        <small>Member since Nov. 2012</small>
                                    </p>
                                </li>
                                <li class="user-footer">
                                    <div class="pull-left">
                                        <a href="#" class="btn btn-default btn-flat">Profile</a>
                                    </div>
                                    <div class="pull-right">
                                        <a href="<?= Url::to(['site/logout']) ?>" class="btn btn-default btn-flat">
                                            <?= Yii::t('backend', 'Sign out') ?>
                                        </a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <aside class="main-sidebar">
            <section class="sidebar">
                <ul class="sidebar-menu" data-widget="tree">
                    <li>
                        <a href="<?= Url::to(['@domain'], true) ?>" target="_blank">
                            <i class="fa fa-desktop"></i><span>Xem website</span>
                            <span class="pull-right-container"></span>
                        </a>
                    </li>
                    <li>
                        <a href="<?= Url::to(['site/index']) ?>">
                            <i class="fa fa-home"></i>
                            <span>
                                <?= Yii::t('backend', 'Homepage') ?>
                            </span>
                            <span class="pull-right-container"></span>
                        </a>
                    </li>
                    <?php if ($user['permission'] == User::ROLE_SENIOR): ?>
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-cogs"></i>
                                <span>Cài đặt nâng cao</span>
                                <span class="pull-right-container">
                              <i class="fa fa-angle-left pull-right"></i>
                            </span>
                            </a>
                            <ul class="treeview-menu">
                                <li>
                                    <a href="<?= Url::to(['page/index']) ?>">
                                        <i class="fa fa-archive"></i>
                                        Quản lý trang
                                    </a>
                                </li>
                                <li>
                                    <a href="<?= Url::to(['photo-location/index']) ?>">
                                        <i class="fa fa-picture-o"></i>
                                        Quản lý vị trí ảnh
                                    </a>
                                </li>
                                <li>
                                    <a href="<?= Url::to(['setting/index']) ?>">
                                        <i class="fa fa-wrench"></i>
                                        Quản lý cấu hình
                                    </a>
                                </li>
                                <li>
                                    <a href="<?= Url::to(['unit/index']) ?>">
                                        <i class="fa fa-truck"></i>
                                        Quản lý giá
                                    </a>
                                </li>
                            </ul>
                        </li>
                    <?php endif; ?>
                    <li class="treeview">
                        <a href="">
                            <i class="fa fa-cog"></i>
                            <span><?= Yii::t('backend', 'Setting') ?></span>
                            <span class="pull-right-container">
                              <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li>
                                <a href="<?= Url::to(['general-information/index']) ?>">
                                    <i class="fa fa-bookmark"></i>
                                    <?= Yii::t('backend', 'General configuration') ?>
                                </a>
                            </li>
                            <li>
                                <a href="<?= Url::to(['category/index']) ?>">
                                    <i class="fa fa-folder"></i>
                                    <?= Yii::t('backend', 'Categories') ?>
                                </a>
                            </li>
                            <li>
                                <a href="<?= Url::to(['image/index']) ?>">
                                    <i class="fa fa-picture-o"></i>
                                    <?= Yii::t('backend', 'Images') ?>
                                </a>
                            </li>
                            <li>
                                <a href="<?= Url::to(['setting/index']) ?>">
                                    <i class="fa fa-wrench"></i>
                                    <?= Yii::t('backend', 'Configuration') ?>
                                </a>
                            </li>
                            <li>
                                <a href="<?= Url::to(['supporter/index']) ?>">
                                    <i class="fa fa-shield"></i>
                                    <?= Yii::t('backend', 'Supporters') ?>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="<?= Url::to(['post/index']) ?>">
                            <i class="fa fa-list-ul"></i>
                            <span>
                                <?= Yii::t('backend', 'Posts') ?>
                            </span>
                            <span class="pull-right-container"></span>
                        </a>
                    </li>
                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-list-alt"></i>
                            <span>Quản lý tin rao</span>
                            <span class="pull-right-container">
                              <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li>
                                <a href="<?= Url::to(['classifieds/index']) ?>">
                                    <i class="fa fa-circle-o"></i>
                                    Tin đã duyệt
                                </a>
                            </li>
                            <li>
                                <a href="<?= Url::to(['setting/index']) ?>">
                                    <i class="fa fa-circle-o"></i>
                                    Tin chờ duyệt
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-shopping-cart"></i>
                            <span>Quản lý sản phẩm</span>
                            <span class="pull-right-container">
                              <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li>
                                <a href="<?= Url::to(['product/index']) ?>">
                                    <i class="fa fa-circle-o"></i>
                                    Sản phẩm đã duyệt
                                </a>
                            </li>
                            <li>
                                <a href="<?= Url::to(['setting/index']) ?>">
                                    <i class="fa fa-circle-o"></i>
                                    Sản phẩm chờ duyệt
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="<?= Url::to(['image/index']) ?>">
                            <i class="fa fa-bar-chart"></i><span>Quản lý thống kê</span>
                            <span class="pull-right-container"></span>
                        </a>
                    </li>
                    <li>
                        <a href="<?= Url::to(['student/index']) ?>">
                            <i class="fa fa-group"></i><span>Quản lý thành viên</span>
                            <span class="pull-right-container"></span>
                        </a>
                    </li>
                    <li>
                        <a href="<?= Url::to(['course/index']) ?>">
                            <i class="fa fa-book"></i><span>Quản lý khóa học</span>
                            <span class="pull-right-container"></span>
                        </a>
                    </li>
                    <li>
                        <a href="<?= Url::to(['teacher/index']) ?>">
                            <i class="fa fa-id-badge"></i><span>Quản lý giáo viên</span>
                            <span class="pull-right-container"></span>
                        </a>
                    </li>
                    <li>
                        <a href="<?= Url::to(['teacher/index']) ?>">
                            <i class="fa fa-comments-o"></i><span>Quản lý học viên</span>
                            <span class="pull-right-container"></span>
                        </a>
                    </li>
                </ul>
            </section>
        </aside>

        <div class="content-wrapper">
            <?= $content ?>
        </div>
        <footer class="main-footer">
            <div class="pull-right hidden-xs">
                <b>Version</b> 0.0.1
            </div>
            <strong>Copyright &copy; 2018 <a href="">Red tiger solutions jsc</a>.</strong> All rights
            reserved.
        </footer>
        <div id="loader" class="opacity loader">
            <div class="loader-inner ball-scale-ripple-multiple vh-center">
                <div></div>
                <div></div>
                <div></div>
            </div>
        </div>
    </div>
    <script>
        var base = "<?= Yii::$app->getHomeUrl() ?>";
        console.log(base);
    </script>
    <?php $this->endBody() ?>
    </body>
    </html>
<?php $this->endPage() ?>
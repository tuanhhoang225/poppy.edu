<?php
/**
 * Created by PhpStorm.
 * User: vietv
 * Date: 3/9/2018
 * Time: 11:19 PM
 */

use yii\helpers\Url;

/* @var $category \common\models\Category */
/* @var $classifieds \common\models\Classifieds */

?>

<div class="contentAjax padding-top">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 float-left">
                <div class="row">
                    <div class="col-sm-9 col-xs-12 pull-right" style="margin-top: -38px;">
                        <section class="product-home">
                            <div class="row">
                                <div class="product-list">
                                    <?php foreach ($classifieds as $key => $value): ?>
                                        <div class="col-sm-4 col-xs-6">
                                            <div class="product-home-detail">
                                                <div class="product-img">
                                                    <a title="<?= $value['title'] ?>"
                                                       href="<?= Url::to(['site/view', 'category' => $category['slug'], 'content' => $value['slug']]) ?>">
                                                        <img src="<?= $value['avatar'] ?>" alt="<?= $value['title'] ?>"
                                                             title="<?= $value['title'] ?>"></a>
                                                    <a title="<?= $value['title'] ?>"
                                                       href="<?= Url::to(['site/view', 'category' => $category['slug'], 'content' => $value['slug']]) ?>">
                                                        <div class="text-box-img"></div>
                                                    </a>
                                                </div>
                                                <div class="product-title">
                                                    <p style="margin: 5px 0;float: left;width: 100%;height: auto;">
                                                        <span style="color:red">
                                                            Giá: <?= $value['price'] ?>
                                                            <b>Liên hệ <?= $value['contact_name'] ?></b>
                                                        </span>
                                                    </p>
                                                    <p style="height: auto;margin-bottom: 5px">
                                                        Vị trí: <?= $value['address'] ?></p>
                                                    <a title="" href="">
                                                        <h2><?= $value['title'] ?></h2>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

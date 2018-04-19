<?php
/**
 * Created by PhpStorm.
 * User: vietv
 * Date: 3/9/2018
 * Time: 11:19 PM
 */

use yii\helpers\Url;
use yii\widgets\LinkPager;
use common\helpers\FunctionHelper;

/** @var $category \common\models\Category */
/** @var $products \common\models\Product */
/** @var $pages \yii\data\Pagination */

$this->title = $category['title'];

?>

<style>

    .modal-body {
        padding: 0 !important;
    }

    .modal-body {
        padding: 0;
    }

    .porfolioBound {
        padding-top: 0;
    }

    .ms-themes-load {
        height: 285px;
        width: 100%;
        overflow: hidden;
        position: relative
    }

    .ms-themes-load {
        height: 285px;
        width: 100%;
        overflow: hidden;
        position: relative;
    }

    .ms-themes-load img {
        position: absolute;
        height: auto;
        width: 100%;
        top: 0;
        left: 0;
        max-width: 100%;
        -webkit-transition: all ease-in-out 2s;
        -moz-transition: all ease-in-out 2s;
        -o-transition: all ease-in-out 2s;
        transition: all ease-in-out 2s;
    }

    .ms-themes-load:hover img {
        top: 100%;
        transform: translateY(-100%);
        -webkit-transform: translateY(-100%);
        -moz-transform: translateY(-100%);
        -o-transform: translateY(-100%);
        -ms-transform: translateY(-100%);
    }

</style>

<div class="w100 fl main-wapper">
    <div id="ctl00_NavigatePath1_NavidatePath1" class="w100 fr navigate">
        <div class="container-fluid">
            <div class="fr nav-auto">
                <ol>
                    <li>
                        <a href="<?= Url::to(['site/index']) ?>">
                            <span>
                                Trang chủ
                            </span>
                            <span class="span-arrow fa fa-angle-right"></span>
                        </a>
                    </li>
                    <li>
                        <a href="<?= Url::to(['site/view', 'category_slug' => $category['slug']]) ?>">
                            <span>
                                <input type="hidden" class="category-slug" value="<?= $category['slug'] ?>">
                                <?= $category['title'] ?>
                            </span>
                        </a>
                    </li>
                </ol>
            </div>
        </div>
    </div>
    <div class="container-fluid contain_wr">
        <div class="page-content">
            <div class="page-left page100pt border-radius ">
                <div class="w100 fl">
                    <div id="idFilterProject">
                        <div class="contentheader">
                            <div class="tabs">
                                <a id="tabs1" class="bttabs" href="">
                                    Thể loại
                                </a>
                            </div>
                        </div>
                        <div class="tabs_container tabs1">
                            <div id="tabs1_1" class="tabs_content">
                                <?php foreach (FunctionHelper::get_categories_by_parent_id($category['id']) as $key => $value): ?>
                                    <div class="item">
                                        <a>
                                        <span type="checkbox">
                                            <input class="check-box" type="checkbox" title=""
                                                   value="<?= $value['id'] ?>">
                                            <label>
                                                <?= $value['title'] ?>
                                            </label>
                                        </span>
                                        </a>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                        <div class="clear"></div>

                    </div>
                    <div class="clear"></div>
                </div>
            </div>
            <div class="clear"></div>
        </div>
        <div class="clear"></div>
    </div>
    <div class="closeProjectDiv" id="IdOcProject">
        <a id="idOpenClose" class="closeProjectA"></a>
    </div>
    <div class="w100 fl main-wapper">
        <div class="w100 fl">
            <div class="container-fluid">
                <div class="w100 fl pro-hot">
                    <div id="Loading" class="loading hidden"></div>
                    <div id="myModal" class="modal fade" role="dialog">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-body">
                                    <div class="div wraptocenter">
                                        <span class="close-mobile"></span>
                                        <div class="div view">
                                            <div class="slider">
                                                <div class="porfolioBound">
                                                    <div href="#" class="porfolioNavigator left"></div>
                                                    <div href="#" class="porfolioNavigator right"></div>
                                                    <div class="porfolioContent">
                                                        <div class="detail_top">
                                                            <div class="detail_top_left">
                                                                <a class="btnClose"></a>
                                                                <a class="btn-ic-pc item-tab-bic ic-active"
                                                                   title=""></a>
                                                                <a class="btn-ic-mobile item-tab-bic" title=""></a>
                                                            </div>
                                                            <div class="detail_top_right">
                                                                <a href=""></a>
                                                                <a href="" class="goto"></a>
                                                            </div>
                                                        </div>
                                                        <div class="profolioDetail porfolioDetail">
                                                            <div class="tabBlock1">
                                                                <img src="/uploads/core/images/bg_phimtat.png"
                                                                     class="img-responsive">
                                                            </div>
                                                            <div class="detail_left">
                                                                <div class="list">
                                                                    <div class="temp-item" style="display: none">
                                                                        <div class="item">
                                                                            <a href="javascript:void(0)"
                                                                               style="display: table-cell; text-align: center; vertical-align: middle; cursor: pointer; overflow: hidden; border: 1px solid rgb(204, 204, 204); opacity: 1;"
                                                                               class="select">
                                                                                <img onclick="show_image(event)" src=""
                                                                                     alt="">
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                    <div class="desktop-images"></div>
                                                                    <div class="mobile-images"
                                                                         style="display: none;"></div>
                                                                </div>
                                                            </div>
                                                            <div class="detail_right ms-themes-load">
                                                                <img class="default-image img-responsive" src=""
                                                                     style="display: none; top: 0; transition-duration: 3.11s;">
                                                            </div>
                                                            <div class="detail_right1">
                                                                <div class="description">
                                                                </div>
                                                                <div class="phimtat"></div>
                                                                <div class="btn-more red">
                                                                    <a href="" target="_blank">
                                                                        XEM WEBSITE
                                                                        <i class="fa fa-arrow-right"></i>
                                                                    </a>
                                                                    <span class="width-red">
                                                                </div>
                                                                <div class="btn-more red">
                                                                    <a href="">
                                                                        GỬI BÁO GIÁ
                                                                        <i class="fa fa-arrow-right"></i>
                                                                    </a>
                                                                    <span class="width-red"></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="fadePopupVideo">
                        <div class="XemWebSite-xs">
                            <a href="" target="_blank" id="xemwebsite-XS">
                                XEM WEBSITE
                                <i class="fa fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                    <div id="lightPopupVideo">
                        <div id="VideoFrame2">
                            <div id="VideoPlayerTitle3" class="dn"></div>
                            <a class="btclose"></a>
                            <div id="VideoPlayerEmbedCode3">
                            </div>
                        </div>
                        <span id="LuuIdNgam" style="display: none;"></span>
                        <span id="IdTrangThai" style="display: none;"></span>
                    </div>
                    <div class="page-left page100pt border-radius">
                        <div class="porfolioListBlock">
                            <div class="list">
                                <div class="row">
                                    <?php foreach ($products as $key => $value): ?>
                                        <div class="col-sm-6 col-md-4 item_wr">
                                            <div class="w100 fl relative itemBicBig">
                                                <div class="item-box">
                                                    <p></p>
                                                    <div class="item">
                                                        <div class="image" id="IdImageDesktop">
                                                            <div class="bggif">
                                                                <img alt="" class="img-responsive"
                                                                     style="height: 250px;"
                                                                     src="<?= $value['avatar'] ?>">
                                                                <div class="zoomOver1">
                                                                    <a class="show-template iconView zoomOver" href=""
                                                                       data-toggle="modal"
                                                                       data-target="#myModal"
                                                                       data-id="<?= $value['id'] ?>">
                                                                        <img class="loop original"
                                                                             src="/uploads/core/images/bc_iconView.png">
                                                                        <img class="loop loop1"
                                                                             src="/uploads/core/images/bc_iconView_act.png">
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="phone_img co" id="IdImageMobile">
                                                            <img alt=""
                                                                 src="/uploads/core/images/251116_120734laluna_mobile_thumb.jpg"
                                                                 class="img-responsive">
                                                            <div class="zoomover2">
                                                                <a href="">
                                                                    <img class="loop original"
                                                                         src="/uploads/core/images/bc_iconView.png">
                                                                    <img class="loop loop1"
                                                                         src="/uploads/core/images/bc_iconView_act.png">
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="clear"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tenduan w100 fl">
                                                <?= $value['title'] ?>
                                            </div>
                                            <div class="clear"></div>
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="w100 fl main-wapper">
    <div class="col-md-12">
        <div class="product-pagination text-center">
            <div class="header-subject">
                <?php
                echo LinkPager::widget(['pagination' => $pages]);
                ?>
            </div>
        </div>
    </div>
</div>

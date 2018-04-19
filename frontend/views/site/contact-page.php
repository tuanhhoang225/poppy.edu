<?php
/**
 * Created by PhpStorm.
 * User: vietv
 * Date: 3/9/2018
 * Time: 11:19 PM
 */

use yii\helpers\Url;

/** @var $category \common\models\Category */

$this->title = $category['title'];

?>

<style>
    .contactBlock .captraBlock img {
        float: left;
        height: 50px !important;
        width: 100px !important;
    }

    .contactBlock .contactForm .sendBtn {
        height: 62px;
        position: absolute;
        right: 0;
        top: 0;
        width: 102px;
    }
</style>

<div class="w100 fl main-wapper">
    <div class="w100 fr navigate">
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
                                <?= $category['title'] ?>
                            </span>
                        </a>
                    </li>
                </ol>
            </div>
        </div>
    </div>
    <div class="container-fluid contain_wr">
        <div class="row">
            <div class="col-md-3">
                <div class="movable" style="padding-top: 0;">
                    <div class="contentheader">
                        <span class="bor side left"></span>
                        <span class="bor side right"></span>
                        <span class="bor bot"></span>
                    </div>
                    <div class="menu-content">
                        <div id="ctl00_cphMain_Vertical1_rmnuMenu" class="RadMenu RadMenu_Left" style="z-index: 7000;">
                            <ul class="rmRootGroup rmVertical">
                                <li class="rmItem rmFirst">
                                    <a href="" class="rmLink rmRootLink" style="width: 233px;">
                                        <span class="rmText">Thư ngỏ</span>
                                    </a>
                                </li>
                                <li class="rmItem ">
                                    <a href="" class="rmLink rmRootLink expanded" style="width: 233px;">
                                        <span class="rmText">Giới thiệu chung</span>
                                    </a>
                                </li>
                                <li class="rmItem ">
                                    <a href=""
                                       class="rmLink rmRootLink" style="width: 233px;">
                                        <span class="rmText">Hồ sơ năng lực</span>
                                    </a>
                                </li>
                                <li class="rmItem rmLast">
                                    <a href="" class="rmLink rmRootLink" style="width: 233px;">
                                        <span class="rmText">Giải pháp BIC CMS</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
            <div class="col-md-9">
                <div class="contactFrame ">
                    <div class="contactBlock">
                        <div class="row">
                            <div class="col-xs-12 col-sm-6  col-lg-6 col-md-6">
                                <div class="infoBlock">
                                    <div class="companyName">
                                        <img src="/uploads/demo/company_vi.png">
                                    </div>
                                    <div class="infoItem">
                                        <?= $category['content'] ?>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6  col-lg-6 col-md-6">
                                <div class="contactForm" id="contact_form">
                                    <div>
                                        <div>
                                            <div class="labelsColumn">
                                                <div class="Column">
                                                    <label>
                                                        Họ tên<span>(*)</span>
                                                    </label>
                                                </div>
                                                <div class="Column">
                                                    <label>
                                                        Địa chỉ
                                                    </label>
                                                </div>
                                                <div class="Column">
                                                    <label>
                                                        Email<span>(*)</span>
                                                    </label>
                                                </div>
                                                <div class="Column">
                                                    <label>
                                                        Điện thoại<span>(*)</span>
                                                    </label>

                                                </div>
                                                <div class="Column">
                                                    <label class="title_label">
                                                        Tiêu đề<span>(*)</span>
                                                    </label>
                                                </div>
                                                <div class="Column">
                                                    <label>
                                                        Nội dung
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="textBoxsColumn">
                                                <input type="text"
                                                       class="RadInputMgr RadInputMgr_Default RadInput_Enabled_Default"
                                                       placeholder="Họ tên">
                                                <input type="text" class="textbox" placeholder="Địa chỉ">
                                                <input type="text"
                                                       class="RadInputMgr RadInputMgr_Default RadInput_Enabled_Default"
                                                       placeholder="Email">
                                                <input type="text"
                                                       class="RadInputMgr RadInputMgr_Default RadInput_Enabled_Default"
                                                       placeholder="Số điện thoại">
                                                <input type="text"
                                                       class="RadInputMgr RadInputMgr_Default RadInput_Enabled_Default"
                                                       placeholder="Tiêu đề">
                                                <textarea rows="2" cols="20" class="textboxMultiline"
                                                          placeholder="Nội dung">
                                                </textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="sendBlock">
                                        <div class="captraBlock controlCol">
                                            <div class="sendBtn">
                                                <img src="/uploads/core/images/send_vi.png" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="clear"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
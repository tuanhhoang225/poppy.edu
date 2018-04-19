<?php

use frontend\assets\JssorAsset;
use common\helpers\FunctionHelper;
use yii\helpers\Url;

/* @var $this yii\web\View */

JssorAsset::register($this);

$general = FunctionHelper::get_general_information();

$this->title = $general['site_name'];
$key_newpage = FunctionHelper::get_post_by_page_key('news-page', 5);
$category_key = FunctionHelper::get_category('tin-tuc-7');


?>
<?php $key_gt1 = FunctionHelper::get_setting_by_key('key_gt1') ?>
<?php $key_gt = FunctionHelper::get_setting_by_key('gioi-thieu') ?>
<?php $key_tq = FunctionHelper::get_setting_by_key('tong-quan') ?>
<?php $key_vitri = FunctionHelper::get_setting_by_key('vi-tri-dac-dia') ?>
<?php $key_canho1 = FunctionHelper::get_setting_by_key('can-ho-dien-hinh') ?>
<?php $key_thietke = FunctionHelper::get_setting_by_key('thiet-ke') ?>
<?php $key_video = FunctionHelper::get_setting_by_key('video-duan') ?>


<div id='main' data-scroll-offset='88'>


    <div id='full_slider_1'
         class='avia-fullwidth-slider main_color avia-shadow  avia-builder-el-0  el_before_av_section  avia-builder-el-first  container_wrap fullsize'>
        <div data-size='no scaling' data-lightbox_size='large' data-animation='slide' data-ids='797'
             data-video_counter='0' data-autoplay='false' data-bg_slider='false' data-slide_height=''
             data-handle='av_slideshow_full' data-interval='5' data-class=' ' data-css_id='' data-scroll_down=''
             data-control_layout='av-control-default' data-custom_markup='' data-perma_caption=''
             data-autoplay_stopper='' data-src='' data-position='top left' data-repeat='no-repeat'
             data-attach='scroll' data-stretch=''
             class='avia-slideshow avia-slideshow-1  av-control-default avia-slideshow-no scaling av_slideshow_full   avia-slide-slider '
             itemscope="itemscope" itemtype="https://schema.org/ImageObject">
            <ul class='avia-slideshow-inner'>
                <li class=' av-single-slide slide-1 '>
                    <div data-rel='slideshow-1' class='avia-slide-wrap'>
                        <img
                                src='<?= FunctionHelper::get_images_by_photo_location_key('homepage-slider', 1)['avatar'] ?>'
                                width='3742' height='2188'
                                title='Website Roman-01' alt='' itemprop="contentURL"/></div>
                </li>
            </ul>
        </div>
    </div>
    <div id='uuudaimoi'
         class='avia-section main_color avia-section-no-padding avia-no-border-styling avia-full-stretch avia-bg-style-scroll  avia-builder-el-1  el_after_av_slideshow_full  el_before_av_section  av-minimum-height av-minimum-height-50 container_wrap fullsize'
         style='background-color: #6c4433; background-repeat: no-repeat; background-image: url(http://romanplaza.vn/wp-content/uploads/2017/04/daimond-brg.png); background-attachment: scroll; background-position: top left; background-color: #6c4433; '
         data-section-bg-repeat='stretch'>
        <div class='container'>
            <div class='template-page content  av-content-full alpha units'>
                <div class='post-entry post-entry-type-page post-entry-10'>
                    <div class='entry-content-wrapper clearfix'>
                        <div class='flex_column_table av-equal-height-column-flextable'>
                            <div class="flex_column av_one_fourth  av-animated-generic left-to-right  no_margin flex_column_table_cell av-equal-height-column av-align-middle first  avia-builder-el-2  el_before_av_three_fourth  avia-builder-el-first  "
                                 style='padding:50px 0px 0px 0px ; border-radius:0px; '>
                                <section class="av_textblock_section" itemscope="itemscope"
                                         itemtype="https://schema.org/CreativeWork">
                                    <div class='avia_textblock ' itemprop="text"><h2 class="h2top"
                                                                                     style="visibility: visible; animation-name: fadeInLeft;">
                                            <span style="font-size: 14pt;">GIÁ CHỈ TỪ</span><br/>
                                            <span style="font-size: 42pt;"><strong
                                                        class="style19">1.9</strong></span></h2>
                                        <h2 class="h2top" style="visibility: visible; animation-name: fadeInLeft;">
                                            <span style="font-size: 14pt;">Tỷ/CĂN</span></h2>
                                        <h2 class="h2top"
                                            style="visibility: visible; animation-name: fadeInLeft;"></h2>
                                    </div>
                                </section>
                            </div>
                            <div class="flex_column av_three_fourth  av-animated-generic right-to-left  no_margin flex_column_table_cell av-equal-height-column av-align-middle   avia-builder-el-4  el_after_av_one_fourth  avia-builder-el-last  "
                                 style='padding:50px 0px 0px 0px ; border-radius:0px; '>
                                <section class="av_textblock_section" itemscope="itemscope"
                                         itemtype="https://schema.org/CreativeWork">
                                    <div class='avia_textblock  av_inherit_color' style='color:#ffffff; '
                                         itemprop="text"><h2 class="umt" style="color: #b2a672; text-align: left;">
                                            <span style="color: #ffeea9; font-size: 14pt;" class="dangky"> ĐĂNG KÝ TẢI BẢNG GIÁ</span>
                                        </h2>
                                    </div>
                                </section>
                                <form action="http://romanplaza.vn/" method="post"
                                      class="avia_ajax_form av-form-labels-hidden   avia-builder-el-6  el_after_av_textblock  avia-builder-el-last  av-custom-form-color av-light-form"
                                      data-avia-form-id="1" data-avia-redirect=''>
                                    <fieldset><p class=' first_form  form_element form_element_third'
                                                 id='element_avia_1_1'><input name="avia_1_1"
                                                                              class="text_input is_empty"
                                                                              type="text" id="avia_1_1" value=""
                                                                              placeholder='Họ & tên*'/></p>
                                        <p class=' form_element form_element_third' id='element_avia_2_1'><input
                                                    name="avia_2_1" class="text_input is_phone" type="text"
                                                    id="avia_2_1" value="" placeholder='Điện thoại*'/></p>
                                        <p class=' form_element form_element_third av-last-visible-form-element'
                                           id='element_avia_3_1'><input name="avia_3_1" class="text_input is_email"
                                                                        type="text" id="avia_3_1" value=""
                                                                        placeholder='E-Mail*'/></p>
                                        <p class="hidden"><input type="text" name="avia_4_1" class="hidden "
                                                                 id="avia_4_1" value=""/></p>
                                        <p class="form_element "><input type="hidden" value="1"
                                                                        name="avia_generated_form1"/><input
                                                    type="submit" value="Tải xuống" class="button"
                                                    data-sending-label="Sending"/></p></fieldset>
                                </form>
                                <div id="ajaxresponse_1" class="ajaxresponse ajaxresponse_1 hidden"></div>
                            </div>
                        </div><!--close column table wrapper. Autoclose:  -->

                    </div>
                </div>
            </div><!-- close content main div --></div>
    </div>


    <div id='menu-item-1'
         class='avia-section main_color avia-section-default avia-no-shadow avia-bg-style-scroll  avia-builder-el-7  el_after_av_section  el_before_av_layout_row  av-minimum-height av-minimum-height-100 container_wrap fullsize'>
        <div class='container'>
            <div class='template-page content  av-content-full alpha units'>
                <div class='post-entry post-entry-type-page post-entry-10'>
                    <div class='entry-content-wrapper clearfix'>
                        <section class="av_textblock_section" itemscope="itemscope"
                                 itemtype="https://schema.org/CreativeWork">
                            <div class='avia_textblock  av_inherit_color' style='color:#1a0e3b; '
                                 itemprop="text">
                                <p
                                        style="text-align: center;">
                                            <span style="font-size: 24pt;"><strong><?= $key_gt1['title'] ?>
                                                     </strong></span>
                                </p>

                                <?= $key_gt1['content'] ?>

                            </div>
                        </section>


                        <div style='height:50px'
                             class='hr hr-invisible  avia-builder-el-9  el_after_av_textblock  el_before_av_one_third '>
                            <span class='hr-inner '><span class='hr-inner-style'></span></span></div>


                        <?php foreach ($key_gt1['images0'] as $key_gt1 => $value_gt1): ?>
                            <div class="flex_column av_one_third  flex_column_div av-zero-column-padding   avia-builder-el-12  el_after_av_one_third  el_before_av_one_third  "
                                 style='border-radius:0px; '>
                                <div class='avia-image-container avia_animated_image avia_animate_when_almost_visible top-to-bottom av-styling- av-hover-grow  avia-builder-el-13  avia-builder-el-no-sibling  avia-align-center '
                                     itemscope="itemscope" itemtype="https://schema.org/ImageObject">
                                    <div class='avia-image-container-inner'><img class='avia_image '
                                                                                 src='<?= $value_gt1['avatar'] ?>'
                                                                                 alt='' title='Print'
                                                                                 itemprop="contentURL"/></div>
                                </div>
                            </div>
                        <?php endforeach; ?>

                    </div>
                </div>
            </div><!-- close content main div --></div>
    </div>


    <div id='av-layout-grid-1'
         class='av-layout-grid-container entry-content-wrapper main_color av-flex-cells av-border-top-bottom avia-builder-el-16  el_after_av_section  el_before_av_layout_row  submenu-not-first container_wrap fullsize'>
        <div class="flex_cell no_margin av_one_half  avia-builder-el-17  el_before_av_cell_one_half  avia-builder-el-first   avia-full-stretch "
             style='background-image:url(wp-content/uploads/2017/04/daimond-brg.png); background-position:bottom center; background-repeat:no-repeat; background-attachment:scroll; vertical-align:bottom; padding:30px; background-color:#6c4a3e; '>
            <div class='flex_cell_inner'>
                <div class='avia-image-container  av-styling- av-hover-grow  avia-builder-el-18  el_before_av_textblock  avia-builder-el-first  avia-align-center '
                     itemscope="itemscope" itemtype="https://schema.org/ImageObject">
                    <div class='avia-image-container-inner'><img class='avia_image '
                                                                 src='<?php json_decode($key_gt['images']) ?>'
                                                                 alt='' title='logo-roman-plaza'
                                                                 itemprop="contentURL"/></div>
                </div>
                <section class="av_textblock_section" itemscope="itemscope"
                         itemtype="https://schema.org/CreativeWork">
                    <div class='avia_textblock  av_inherit_color' style='color:#ffffff; ' itemprop="text"><h1
                                style="text-align: center;"><span class="umt1"
                                                                  style="color: #1b3147; font-size: 18pt;"><?= $key_gt['title'] ?></span>
                        </h1>
                    </div>
                </section>
                <div style='height:50px'
                     class='hr hr-invisible  avia-builder-el-20  el_after_av_textblock  el_before_av_textblock '>
                    <span class='hr-inner '><span class='hr-inner-style'></span></span></div>
                <section class="av_textblock_section" itemscope="itemscope"
                         itemtype="https://schema.org/CreativeWork">
                    <div class='avia_textblock  av_inherit_color' style='color:#ffffff; ' itemprop="text">
                        <p><?= $key_gt['content'] ?></p>
                    </div>
                </section>
            </div>
        </div>
        <div class="flex_cell no_margin av_one_half  avia-builder-el-22  el_after_av_cell_one_half  avia-builder-el-last   av-zero-padding "
             style='vertical-align:middle; padding:0px; '>
            <div class='flex_cell_inner'>
                <div class='avia-image-container  av-styling- av-hover-grow  avia-builder-el-23  avia-builder-el-no-sibling  avia-align-center '
                     itemscope="itemscope" itemtype="https://schema.org/ImageObject">
                    <div class='avia-image-container-inner'>
                        <?php $anh_gt = json_decode($key_gt['images']) ?>
                        <img class='avia_image '
                             src='<?= $anh_gt[0] ?>' alt=''
                             title='tq7' itemprop="contentURL"/></div>
                </div>
            </div>
        </div>
    </div>


    <div id='av-layout-grid-2'
         class='av-layout-grid-container entry-content-wrapper main_color av-flex-cells  avia-builder-el-24  el_after_av_layout_row  el_before_av_slideshow_full  submenu-not-first container_wrap fullsize'>
        <div class="flex_cell no_margin av_one_half  avia-builder-el-25  el_before_av_cell_one_half  avia-builder-el-first   av-zero-padding "
             style='vertical-align:bottom; padding:0px; '>
            <div class='flex_cell_inner'>
                <div class='avia-image-container  av-styling- av-hover-grow  avia-builder-el-26  avia-builder-el-no-sibling  avia-align-center '
                     itemscope="itemscope" itemtype="https://schema.org/ImageObject">
                    <div class='avia-image-container-inner'>
                        <?php $anh_tq = json_decode($key_tq['images']) ?>
                        <img class='avia_image '
                             src='<?= $anh_tq[0] ?>' alt=''
                             title='tq7' itemprop="contentURL"/></div>
                </div>
            </div>
        </div>
        <div class="flex_cell no_margin av_one_half  avia-builder-el-27  el_after_av_cell_one_half  avia-builder-el-last   avia-full-stretch "
             style='background-image:url(wp-content/uploads/2017/04/daimond-brg.png); background-position:center center; background-repeat:no-repeat; background-attachment:scroll; vertical-align:middle; padding:30px; background-color:#6c4a3e; '>
            <div class='flex_cell_inner'>
                <section class="av_textblock_section" itemscope="itemscope"
                         itemtype="https://schema.org/CreativeWork">
                    <div class='avia_textblock  av_inherit_color' style='color:#ffffff; ' itemprop="text"><h1
                                style="text-align: center;"><span class="umt1"
                                                                  style="color: #1b3147; font-size: 18pt;"><?= $key_tq['title'] ?></span>
                        </h1>
                    </div>
                </section>
                <div style='height:50px'
                     class='hr hr-invisible  avia-builder-el-29  el_after_av_textblock  el_before_av_textblock '>
                    <span class='hr-inner '><span class='hr-inner-style'></span></span></div>
                <section class="av_textblock_section" itemscope="itemscope"
                         itemtype="https://schema.org/CreativeWork">
                    <div class='avia_textblock  av_inherit_color' style='color:#ffffff; ' itemprop="text">
                        <p>
                            <?= $key_tq['content'] ?>
                        </p>
                    </div>
                </section>
            </div>
        </div>
    </div>


    <div id='full_slider_2'
         class='avia-fullwidth-slider main_color avia-shadow  avia-builder-el-31  el_after_av_layout_row  el_before_av_layout_row  slider-not-first container_wrap fullsize'>
        <div data-size='no scaling' data-lightbox_size='large' data-animation='slide' data-ids='727'
             data-video_counter='0' data-autoplay='false' data-bg_slider='false' data-slide_height=''
             data-handle='av_slideshow_full' data-interval='5' data-class=' ' data-css_id='' data-scroll_down=''
             data-control_layout='av-control-default' data-custom_markup='' data-perma_caption=''
             data-autoplay_stopper='' data-src='' data-position='top left' data-repeat='no-repeat'
             data-attach='scroll' data-stretch=''
             class='avia-slideshow avia-slideshow-2  av-control-default avia-slideshow-no scaling av_slideshow_full   avia-slide-slider '
             itemscope="itemscope" itemtype="https://schema.org/ImageObject">
            <ul class='avia-slideshow-inner'>
                <li class=' av-single-slide slide-1 '>
                    <div data-rel='slideshow-2' class='avia-slide-wrap'>
                        <?php $anh_tq = json_decode($key_tq['images']) ?>
                        <img
                                src='<?= $anh_tq['1'] ?>' width='1346' height='627'
                                title='ban-do' alt='' itemprop="contentURL"/></div>
                </li>
            </ul>
        </div>
    </div>


    <div id='menu-item-2'
         class='av-layout-grid-container entry-content-wrapper main_color av-flex-cells  avia-builder-el-32  el_after_av_slideshow_full  el_before_av_slideshow_full  submenu-not-first container_wrap fullsize'>
        <div class="flex_cell no_margin av_one_half  avia-builder-el-33  el_before_av_cell_one_half  avia-builder-el-first   avia-full-stretch "
             style='height:680px; min-height:680px;background-image:url(wp-content/uploads/2017/04/daimond-brg.png); background-position:bottom left; background-repeat:no-repeat; background-attachment:scroll; vertical-align:middle; padding:30px; background-color:#6c4a3e; '>
            <div class='flex_cell_inner'>
                <section class="av_textblock_section" itemscope="itemscope"
                         itemtype="https://schema.org/CreativeWork">
                    <div class='avia_textblock  av_inherit_color' style='color:#ffffff; ' itemprop="text"><h1
                                style="text-align: center;"><span class="umt1"
                                                                  style="color: #1b3147; font-size: 18pt;"> <?= $key_vitri['title'] ?> </span>
                        </h1>
                    </div>
                </section>
                <div style='height:40px'
                     class='hr hr-invisible  avia-builder-el-35  el_after_av_textblock  el_before_av_textblock '>
                    <span class='hr-inner '><span class='hr-inner-style'></span></span></div>
                <section class="av_textblock_section" itemscope="itemscope"
                         itemtype="https://schema.org/CreativeWork">
                    <div class='avia_textblock  av_inherit_color' style='color:#ffffff; ' itemprop="text">
                        <p>
                            <?= $key_vitri['content'] ?>
                        </p>
                    </div>
                </section>
            </div>
        </div>
        <div class="flex_cell no_margin av_one_half  avia-builder-el-37  el_after_av_cell_one_half  avia-builder-el-last   av-zero-padding "
             style='height:680px; min-height:680px;vertical-align:middle; padding:0px; '>
            <div class='flex_cell_inner'>
                <div class='avia-image-container  av-styling- av-hover-grow  avia-builder-el-38  avia-builder-el-no-sibling  avia-align-center '
                     itemscope="itemscope" itemtype="https://schema.org/ImageObject">
                    <div class='avia-image-container-inner'>
                        <?php $anh_vitri = json_decode($key_vitri['images']) ?>
                        <img class='avia_image '
                             src='<?= $anh_vitri[0] ?>' alt=''
                             title='lkv' itemprop="contentURL"/></div>
                </div>
            </div>
        </div>
    </div>
    <div id='menu-item-3'
         class='avia-fullwidth-slider main_color avia-shadow  avia-builder-el-39  el_after_av_layout_row  el_before_av_slideshow_full  slider-not-first container_wrap fullsize'>
        <div data-size='no scaling' data-lightbox_size='large' data-animation='slide' data-ids='682,683,684'
             data-video_counter='0' data-autoplay='false' data-bg_slider='false' data-slide_height=''
             data-handle='av_slideshow_full' data-interval='5' data-class=' ' data-css_id='' data-scroll_down=''
             data-control_layout='av-control-default' data-custom_markup='' data-perma_caption=''
             data-autoplay_stopper='' data-src='' data-position='top left' data-repeat='no-repeat'
             data-attach='scroll' data-stretch=''
             class='avia-slideshow avia-slideshow-3  av-control-default avia-slideshow-no scaling av_slideshow_full   avia-slide-slider '
             itemscope="itemscope" itemtype="https://schema.org/ImageObject">


            <ul class='avia-slideshow-inner'>


                <?php foreach ($key_vitri['images0'] as $key_vt => $value_vt): ?>
                    <?php if ($key_vt > 0): ?>
                        <li class=' slide-1 '>
                            <div data-rel='slideshow-3' class='avia-slide-wrap'>
                                <img
                                        src='<?= $value_vt['avatar'] ?>' width='1600' height='570' title='ti1'
                                        alt='' itemprop="contentURL"/></div>
                        </li>
                    <?php endif; ?>
                <?php endforeach; ?>
            </ul>


            <div class='avia-slideshow-arrows avia-slideshow-controls'>
                <a href='#prev' class='prev-slide'
                   aria-hidden='true' data-av_icon=''
                   data-av_iconfont='entypo-fontello'>Previous</a>
                <a
                        href='#next' class='next-slide' aria-hidden='true' data-av_icon=''
                        data-av_iconfont='entypo-fontello'>Next</a>
            </div>
            <div class='avia-slideshow-dots avia-slideshow-controls'>
                <?php for ($i_vt = 0; $i_vt < count($key_vitri['images0']) - 1; $i_vt++): ?>
                    <a href='#<?= $i_vt + 1 ?>'
                       class='goto-slide <?= $i_vt == 0 ? 'active' : '' ?>'><?= $i_vt + 1 ?></a>
                <?php endfor; ?>


            </div>
        </div>
    </div>


    <div id='menu-item-4'
         class='avia-section main_color avia-section-default avia-no-shadow avia-full-stretch avia-bg-style-scroll  avia-builder-el-41  el_after_av_slideshow_full  el_before_av_textblock  av-minimum-height av-minimum-height-100 container_wrap fullsize'
         style='background-repeat: no-repeat; background-image: url(http://romanplaza.vn/wp-content/uploads/2017/04/daimond-brg.png); background-attachment: scroll; background-position: top left; '
         data-section-bg-repeat='stretch'>
        <div class='container'>
            <div class='template-page content  av-content-full alpha units'>
                <div class='post-entry post-entry-type-page post-entry-10'>
                    <div class='entry-content-wrapper clearfix'>
                        <section class="av_textblock_section" itemscope="itemscope"
                                 itemtype="https://schema.org/CreativeWork">
                            <div class='avia_textblock  av_inherit_color' style='color:#1a0e3b; ' itemprop="text">
                                <h1 style="text-align: center;"><span class="umt1"
                                                                      style="color: #1b3147; font-size: 18pt;"><?= $key_canho1['title'] ?></span>
                                </h1>
                            </div>
                        </section>
                        <div style='height:50px'
                             class='hr hr-invisible  avia-builder-el-43  el_after_av_textblock  el_before_av_textblock '>
                            <span class='hr-inner '><span class='hr-inner-style'></span></span></div>
                        <section class="av_textblock_section" itemscope="itemscope"
                                 itemtype="https://schema.org/CreativeWork">
                            <div class='avia_textblock  av_inherit_color' style='color:#1a0e3b; ' itemprop="text">
                                <script>
                                    jQuery(document).ready(function ($) {
                                        $("#tr-easy-tabs-wrapper1 .tr-easy-tabs-activate").pwstabs({
                                            effect: "scale",
                                            defaultTab: 1,
                                            containerWidth: "100%",
                                            tabsPosition: "horizontal",
                                            horizontalPosition: "top",
                                            verticalPosition: "left",
                                            rtl: false
                                        });
                                    });
                                </script>
                                <style>
                                    #tr-easy-tabs-wrapper1 div.pws_tabs_container ul.pws_tabs_controll li a:before, #tr-easy-tabs-wrapper1 div.pws_tabs_container ul.pws_tabs_controll li a {
                                        background-color: rgba(26, 14, 59, 0.1)
                                    }

                                    #tr-easy-tabs-wrapper1 div.pws_tabs_container ul.pws_tabs_controll li a.pws_tab_active:before, #tr-easy-tabs-wrapper1 div.pws_tabs_container ul.pws_tabs_controll li a.pws_tab_active {
                                        background-color: #fff;
                                        color: #333
                                    }

                                    #tr-easy-tabs-wrapper1 div.pws_tabs_container ul.pws_tabs_controll li a {
                                        color: #fff
                                    }

                                    #tr-easy-tabs-wrapper1 div.pws_tabs_container ul.pws_tabs_controll li a.pws_tab_active, #tr-easy-tabs-wrapper1 div.pws_tabs_list {
                                        border-color: rgba(26, 14, 59, 0.1)
                                    }
                                </style>

                                <div id="tr-easy-tabs-wrapper1" class="tr-easy-tabs-wrapper">
                                    <div class="tr-easy-tabs-activate">


                                        <?php foreach ($key_canho1['images0'] as $key1 => $value1): ?>

                                            <div data-pws-tab="tab111" data-pws-tab-name="<?= $value1['title'] ?>">
                                                <p>
                                                    <a href="wp-content/uploads/2017/12/roman-plaza-hai-phat-mat-bang-ch1.png">
                                                        <img
                                                                class="alignnone size-full wp-image-728"
                                                                src="<?= $value1['avatar'] ?>"
                                                                alt="" width="1076" height="466"/>
                                                    </a>
                                                </p>

                                            </div>

                                        <?php endforeach; ?>


                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div><!-- close content main div --></div>
    </div>
    <div id='after_section_3 ' class='main_color container_wrap fullsize'>
        <div ID="menu-item-5" class='container'>
            <div class='template-page content  av-content-full alpha units'>
                <div class='post-entry post-entry-type-page post-entry-10'>
                    <div class='entry-content-wrapper clearfix'>
                        <section class="av_textblock_section" itemscope="itemscope"
                                 itemtype="https://schema.org/CreativeWork">
                            <div class='avia_textblock  av_inherit_color' style='color:#1a0e3b; ' itemprop="text">
                                <h1 style="text-align: center;">
                                    <span class="umt1"
                                          style="color: #1b3147; font-size: 18pt;"> <?= $key_thietke['title'] ?> </span>
                                </h1>
                            </div>
                        </section>
                        <section class="av_textblock_section" itemscope="itemscope"
                                 itemtype="https://schema.org/CreativeWork">
                            <div class='avia_textblock  av_inherit_color' style='color:#1a0e3b; ' itemprop="text">
                                <p>
                                    <?= $key_thietke['content'] ?>
                                </p>
                            </div>
                        </section>
                    </div>
                </div>
            </div><!-- close content main div --></div>
    </div>
    <div id='full_slider_5'
         class='avia-fullwidth-slider main_color avia-shadow  avia-builder-el-47  el_after_av_textblock  el_before_av_section  slider-not-first container_wrap fullsize'>
        <div data-size='no scaling' data-lightbox_size='large' data-animation='slide_up'
             data-ids='629,630,515,516,514,517' data-video_counter='0' data-autoplay='true' data-bg_slider='false'
             data-slide_height='' data-handle='av_slideshow_full' data-interval='5' data-class=' ' data-css_id=''
             data-scroll_down='' data-control_layout='av-control-default' data-custom_markup=''
             data-perma_caption='' data-autoplay_stopper='' data-src='' data-position='top left'
             data-repeat='no-repeat' data-attach='scroll' data-stretch=''
             class='avia-slideshow avia-slideshow-5  av-control-default avia-slideshow-no scaling av_slideshow_full   avia-slide_up-slider '
             itemscope="itemscope" itemtype="https://schema.org/ImageObject">
            <ul class='avia-slideshow-inner'>
                <?php foreach ($key_thietke['images0'] as $key_tk => $value_tk): ?>
                    <li class=' slide-1 '>
                        <div data-rel='slideshow-5' class='avia-slide-wrap'><img
                                    src='<?= $value_tk['avatar'] ?>' width='1600' height='669' title='slide6'
                                    alt='' itemprop="contentURL"/></div>
                    </li>
                <?php endforeach; ?>
            </ul>
            <div class='avia-slideshow-arrows avia-slideshow-controls'><a href='#prev' class='prev-slide'
                                                                          aria-hidden='true' data-av_icon=''
                                                                          data-av_iconfont='entypo-fontello'>Previous</a><a
                        href='#next' class='next-slide' aria-hidden='true' data-av_icon=''
                        data-av_iconfont='entypo-fontello'>Next</a></div>
            <div class='avia-slideshow-dots avia-slideshow-controls'>
                <?php for ($i = 0; $i < count($key_thietke['images0']); $i++): ?>
                    <a href='#<?= $i + 1 ?>' class='goto-slide <?= $i == 0 ? 'active' : '' ?>'><?= $i + 1 ?></a>

                <?php endfor; ?>
            </div>
        </div>
    </div>
    <div id='av_section_4'
         class='avia-section main_color avia-section-default avia-no-shadow avia-full-stretch avia-bg-style-scroll  avia-builder-el-48  el_after_av_slideshow_full  el_before_av_section  av-minimum-height av-minimum-height-100 container_wrap fullsize'
         style='background-color: #6c4a3e; background-repeat: no-repeat; background-image: url(http://romanplaza.vn/wp-content/uploads/2017/04/daimond-brg.png); background-attachment: scroll; background-position: top left; background-color: #6c4a3e; '
         data-section-bg-repeat='stretch'>
        <div class='container'>
            <div class='template-page content  av-content-full alpha units'>
                <div class='post-entry post-entry-type-page post-entry-10'>
                    <div class='entry-content-wrapper clearfix'>
                        <section class="av_textblock_section" itemscope="itemscope"
                                 itemtype="https://schema.org/CreativeWork">
                            <div class='avia_textblock  av_inherit_color' style='color:#1a0e3b; ' itemprop="text">
                                <h1 style="text-align: center;"><span class="umt1"
                                                                      style="color: #1b3147; font-size: 18pt;"><?= $key_video['title'] ?></span>
                                </h1>
                            </div>
                        </section>
                        <div style='height:50px'
                             class='hr hr-invisible  avia-builder-el-50  el_after_av_textblock  el_before_av_one_fifth '>
                            <span class='hr-inner '><span class='hr-inner-style'></span></span></div>
                        <div class="flex_column av_one_fifth  flex_column_div av-zero-column-padding first  avia-builder-el-51  el_after_av_hr  el_before_av_three_fifth  "
                             style='border-radius:0px; '></div>
                        <div class="flex_column av_three_fifth  flex_column_div av-zero-column-padding   avia-builder-el-52  el_after_av_one_fifth  el_before_av_one_fifth  "
                             style='border-radius:0px; '>
                            <div class='avia-video avia-video-16-9  ' itemprop="video"
                                 itemtype="https://schema.org/VideoObject">
                                <div class='avia-iframe-wrap'>
                                    <iframe width="1500" height="844"
                                            src="<?= $key_video['link'] ?>"
                                            frameborder="0" gesture="media" allow="encrypted-media"
                                            allowfullscreen></iframe>
                                </div>
                            </div>
                        </div>
                        <div class="flex_column av_one_fifth  flex_column_div av-zero-column-padding   avia-builder-el-54  el_after_av_three_fifth  avia-builder-el-last  "
                             style='border-radius:0px; '></div>

                    </div>
                </div>
            </div><!-- close content main div --></div>
    </div>


    <div id='av_section_5'
         class='avia-section main_color avia-section-default avia-no-shadow avia-bg-style-scroll  avia-builder-el-55  el_after_av_section  el_before_av_section  av-minimum-height av-minimum-height-100 container_wrap fullsize'>
        <div class='container'>
            <div class='template-page content  av-content-full alpha units'>
                <div class='post-entry post-entry-type-page post-entry-10'>
                    <div class='entry-content-wrapper clearfix'>
                        <section class="av_textblock_section" itemscope="itemscope"
                                 itemtype="https://schema.org/CreativeWork">
                            <div class='avia_textblock  av_inherit_color' style='color:#1a0e3b; ' itemprop="text">
                                <h1 style="text-align: center;"><span class="umt1"
                                                                      style="color: #1b3147; font-size: 18pt;">TIN TỨC </span>
                                </h1>
                            </div>
                        </section>
                        <div style='height:50px'
                             class='hr hr-invisible  avia-builder-el-57  el_after_av_textblock  el_before_av_magazine '>
                            <span class='hr-inner '><span class='hr-inner-style'></span></span></div>
                        <div id='av-magazine-1'
                             class='av-magazine  avia-builder-el-58  el_after_av_hr  avia-builder-el-last   av-magazine-hero-left av-magazine-top-bar-active av-magazine-tabs-active'>
                            <div class='av-magazine-top-bar '></div>
                            <div class='av-magazine-group sort_all'>
                                <?php foreach ($key_newpage as $key_post => $value_post): ?>
                                    <?php if ($key_post == 0): ?>
                                        <div class='av-magazine-hero first flex_column av_one_half '>
                                            <article
                                                    class='hentry av-magazine-entry av-magazine-entry-id-806 av-magazine-format-standard av-magazine-type-post av-magazine-entry-1 av-magazine-entry-big '
                                                    itemscope="itemscope" itemtype="https://schema.org/CreativeWork">
                                                <div class='av-magazine-thumbnail'><a
                                                            href='<?= $value_post['slug'] ?>'
                                                            title='tin-tuc-du-an'
                                                            class='av-magazine-thumbnail-link '>
                                                        <img width="710"
                                                             height="375"
                                                             src="<?= $value_post['avatar'] ?>"
                                                             class="attachment-magazine size-magazine wp-post-image"
                                                             alt=""/></a></div>
                                                <div class='av-magazine-content-wrap'>
                                                    <header class='entry-content-header'>
                                                        <h3 class='av-magazine-title entry-title' itemprop="headline">
                                                            <a href='<?= Url::to(['site/view' ,'category_slug' => $category_key['slug'], 'content_slug' => $value_post['slug']]) ?>'
                                                                    title='<?= $value_post['title'] ?>'>
                                                                <?= $value_post['title'] ?>
                                                            </a>
                                                        </h3>
                                                    </header>
                                                    <div class='av-magazine-content entry-content' itemprop="text">
                                                        <?= $value_post['describe'] ?>
                                                    </div>
                                                </div>
                                                <footer class='entry-footer'></footer>
                                            </article>
                                        </div>
                                    <?php endif; ?>
                                    <?php if ($key_post > 0): ?>
                                        <div class='av-magazine-sideshow flex_column av_one_half '>

                                            <article
                                                    class='hentry av-magazine-entry av-magazine-entry-id-755 av-magazine-format-standard av-magazine-type-post av-magazine-entry-2 av-magazine-entry-small '
                                                    itemscope="itemscope" itemtype="https://schema.org/CreativeWork">
                                                <div class='av-magazine-thumbnail'><a
                                                            href='<?= Url::to(['site/view' ,'category_slug' => $category_key['slug'], 'content_slug' => $value_post['slug']]) ?>'
                                                            title='<?= $value_post['avatar']?>'
                                                            class='av-magazine-thumbnail-link '>
                                                        <img width="80"
                                                             height="80"
                                                             src="<?= $value_post['avatar']?>"
                                                             class="attachment-thumbnail size-thumbnail wp-post-image"
                                                             alt=""
                                                             sizes="(max-width: 80px) 100vw, 80px"/></a>
                                                </div>
                                                <div class='av-magazine-content-wrap'>
                                                    <header class='entry-content-header'>

                                                        <h3 class='av-magazine-title entry-title' itemprop="headline"><a
                                                                    href='<?= Url::to(['site/view' ,'category_slug' => $category_key['slug'], 'content_slug' => $value_post['slug']]) ?>'
                                                                    title='<?= $value_post['title']?>'>
                                                                <?= $value_post['title']?>
                                                            </a>
                                                        </h3>

                                                        <p>
                                                            <?= $value_post['describe']?>
                                                        </p>

                                                    </header>
                                                </div>
                                                <footer class='entry-footer'></footer>
                                            </article>


                                        </div>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                            </div>
                        </div>

                    </div>
                </div>
            </div><!-- close content main div --></div>
    </div>
    <!-- end wrap_all -->


</div>


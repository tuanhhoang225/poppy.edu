<?php
/**
 * Created by PhpStorm.
 * User: vietv
 * Date: 3/9/2018
 * Time: 11:15 PM
 */

use yii\helpers\Url;
use common\helpers\FunctionHelper;

$key_diachi = FunctionHelper::get_setting_by_key('address');
$key_phone = FunctionHelper::get_setting_by_key('phone');
$key_email = FunctionHelper::get_setting_by_key('email');
$key_copyright = FunctionHelper::get_setting_by_key('copyright');
$key_fb = FunctionHelper::get_setting_by_key('key_fb');
?>

<div id='menu-item-6 || menu-item-8'
     class='avia-section main_color avia-section-no-padding avia-no-shadow avia-bg-style-scroll  avia-builder-el-59  el_after_av_section  el_before_av_section  av-minimum-height av-minimum-height-50 container_wrap fullsize'
     style='background-color: #d8dbe3; background-repeat: no-repeat; background-image: url(http://romanplaza.vn/wp-content/uploads/2017/04/daimond-brg.png); background-attachment: scroll; background-position: bottom left; background-color: #d8dbe3; '
     data-section-bg-repeat='no-repeat'>
    <div class='av-section-color-overlay-wrap'>
        <!--        <a href='#next-section' title='' class='scroll-down-link'-->
        <!--                                                  aria-hidden='true' data-av_icon=''-->
        <!--                                                  data-av_iconfont='entypo-fontello'></a>-->
        <div class='container'>
            <div class='template-page content  av-content-full alpha units'>
                <div class='post-entry post-entry-type-page post-entry-10'>
                    <div class='entry-content-wrapper clearfix'>
                        <div style='height:30px'
                             class='hr hr-invisible  avia-builder-el-60  el_before_av_one_fourth  avia-builder-el-first '>
                            <span class='hr-inner '><span class='hr-inner-style'></span></span></div>
                        <div class='flex_column_table av-equal-height-column-flextable'>
                            <div class="width-contact flex_column av_one_fourth  av-animated-generic bottom-to-top  flex_column_table_cell av-equal-height-column av-align-bottom av-zero-column-padding first  avia-builder-el-61  el_after_av_hr  el_before_av_one_half  "
                                 style='border-radius:0px; '>
                                <article
                                        class="iconbox iconbox_left_content   avia-builder-el-62  el_before_av_icon_box  avia-builder-el-first "
                                        itemscope="itemscope" itemtype="https://schema.org/CreativeWork"><a
                                            href='manually.html' title='HOTLINE'
                                            class="iconbox_icon heading-color" aria-hidden='true'
                                            data-av_icon='' data-av_iconfont='entypo-fontello'
                                            style='background-color:#414e67; border:1px solid #414e67; color:#f7f7f7; '></a>
                                    <div class="iconbox_content">
                                        <header class="entry-content-header">
                                            <h3 class='iconbox_content_title'
                                                itemprop="headline"
                                                style='color:#414e67; '>
                                                <?= $key_phone['title'] ?></h3>
                                        </header>
                                        <div class='iconbox_content_container av_inherit_color' itemprop="text"
                                             style='color:#414e67; '><p><a
                                                        href="tel:<?= $key_phone['link'] ?>"><?= $key_phone['content'] ?></a>
                                            </p>
                                        </div>
                                    </div>
                                    <footer class="entry-footer"></footer>
                                </article>
                                <article
                                        class="iconbox iconbox_left_content   avia-builder-el-63  el_after_av_icon_box  el_before_av_icon_box "
                                        itemscope="itemscope" itemtype="https://schema.org/CreativeWork">
                                    <div class="iconbox_icon heading-color" aria-hidden='true' data-av_icon=''
                                         data-av_iconfont='entypo-fontello'
                                         style='background-color:#414e67; border:1px solid #414e67; color:#ededed; '></div>
                                    <div class="iconbox_content">
                                        <header class="entry-content-header">
                                            <h3 class='iconbox_content_title'
                                                itemprop="headline"
                                                style='color:#414e67; '>
                                                <?= $key_email['title'] ?></h3></header>
                                        <div class='iconbox_content_container av_inherit_color' itemprop="text"
                                             style='color:#414e67; '><p><?= $key_email['link'] ?></p>
                                        </div>
                                    </div>
                                    <footer class="entry-footer"></footer>
                                </article>
                                <article
                                        class="iconbox iconbox_left_content   avia-builder-el-64  el_after_av_icon_box  el_before_av_hr "
                                        itemscope="itemscope" itemtype="https://schema.org/CreativeWork">
                                    <div class="iconbox_icon heading-color" aria-hidden='true' data-av_icon=''
                                         data-av_iconfont='entypo-fontello'
                                         style='background-color:#414e67; border:1px solid #414e67; color:#f2f2f2; '></div>
                                    <div class="iconbox_content">
                                        <header class="entry-content-header"><h3 class='iconbox_content_title'
                                                                                 itemprop="headline"
                                                                                 style='color:#414e67; '><a
                                                        href='<?= $key_fb['link'] ?>' title='FACEBOOK'
                                                        target="_blank">FACEBOOK</a>
                                            </h3></header>
                                        <div class='iconbox_content_container av_inherit_color' itemprop="text"
                                             style='color:#414e67; '><p>
                                                <a
                                                        href='<?= $key_fb['link'] ?>' title='FACEBOOK'
                                                        target="_blank" >Xem
                                                    Trang</a></p>
                                        </div>
                                    </div>
                                    <footer class="entry-footer"></footer>
                                </article>
                                <div style='height:20px'
                                     class='hr hr-invisible  avia-builder-el-65  el_after_av_icon_box  avia-builder-el-last '>
                                    <span class='hr-inner '><span class='hr-inner-style'></span></span></div>
                            </div>
                            <div class='av-flex-placeholder'></div>
                            <div class="flex_column av_one_half  av-animated-generic bottom-to-top  flex_column_table_cell av-equal-height-column av-align-bottom av-zero-column-padding   avia-builder-el-66  el_after_av_one_fourth  el_before_av_one_fourth  "
                                 style='border-radius:0px; '>
                                <section class="av_textblock_section" itemscope="itemscope"
                                         itemtype="https://schema.org/CreativeWork">
                                    <div class='avia_textblock ' itemprop="text"><h2
                                                style="color: #6c4433; text-align: center;"><span class="umt1"
                                                                                                  style="font-size: 15pt;"><?= $key_diachi['title'] ?></span>
                                        </h2>
                                    </div>
                                </section>
                                <div style='height:30px'
                                     class='hr hr-invisible  avia-builder-el-68  el_after_av_textblock  el_before_av_contact '>
                                    <span class='hr-inner '><span class='hr-inner-style'></span></span></div>
                                <form action="http://romanplaza.vn/" method="post"
                                      class="avia_ajax_form av-form-labels-visible   avia-builder-el-69  el_after_av_hr  el_before_av_hr  "
                                      data-avia-form-id="2" data-avia-redirect=''>
                                    <fieldset><p class=' first_form  form_element form_fullwidth'
                                                 id='element_avia_1_2'><label for="avia_1_2">HỌ & TÊN <abbr
                                                        class="required" title="required">*</abbr></label>
                                            <input name="avia_1_2" class="text_input is_empty" type="text"
                                                   id="avia_1_2" value=""/></p>
                                        <p class=' first_form  form_element form_element_half'
                                           id='element_avia_2_2'><label for="avia_2_2">E-Mail <abbr
                                                        class="required" title="required">*</abbr></label>
                                            <input name="avia_2_2" class="text_input is_email" type="text"
                                                   id="avia_2_2" value=""/></p>
                                        <p class=' form_element form_element_half av-last-visible-form-element'
                                           id='element_avia_3_2'><label for="avia_3_2">SỐ ĐIỆN THOẠI <abbr
                                                        class="required" title="required">*</abbr></label>
                                            <input name="avia_3_2" class="text_input is_phone" type="text"
                                                   id="avia_3_2" value=""/></p>
                                        <p class="hidden"><input type="text" name="avia_4_2" class="hidden "
                                                                 id="avia_4_2" value=""/></p>
                                        <p class="form_element "><input type="hidden" value="1"
                                                                        name="avia_generated_form2"/><input
                                                    type="submit" value="Gửi" class="button"
                                                    data-sending-label="Sending"/></p></fieldset>
                                </form>
                                <div id="ajaxresponse_2" class="ajaxresponse ajaxresponse_2 hidden"></div>
                                <div style='height:30px'
                                     class='hr hr-invisible  avia-builder-el-70  el_after_av_contact  avia-builder-el-last '>
                                    <span class='hr-inner '><span class='hr-inner-style'></span></span></div>
                            </div>
                            <div class='av-flex-placeholder'></div>
                            <div class="flex_column av_one_fourth  av-animated-generic bottom-to-top  flex_column_table_cell av-equal-height-column av-align-bottom av-zero-column-padding   avia-builder-el-71  el_after_av_one_half  avia-builder-el-last  "
                                 style='border-radius:0px; '>
                                <div style='height:30px'
                                     class='hr hr-invisible  avia-builder-el-72  el_before_av_textblock  avia-builder-el-first '>
                                    <span class='hr-inner '><span class='hr-inner-style'></span></span></div>
                                <section class="av_textblock_section" itemscope="itemscope"
                                         itemtype="https://schema.org/CreativeWork">
                                    <div class='avia_textblock  av_inherit_color' style='color:#2c3e50; '
                                         itemprop="text">

                                        <p>
                                            <?= $key_diachi['content'] ?>
                                        </p>

                                    </div>
                                </section>
                            </div>
                        </div><!--close column table wrapper. Autoclose:  -->

                    </div>
                </div>
            </div><!-- close content main div --></div>
    </div>
</div>
<div id='av_section_7'
     class='avia-section main_color avia-section-no-padding avia-no-border-styling avia-bg-style-scroll  avia-builder-el-74  el_after_av_section  el_before_av_one_full  container_wrap fullsize'
     style='background-color: #6c4433; background-color: #6c4433; '>
    <div class='container'>
        <div class='template-page content  av-content-full alpha units'>
            <div class='post-entry post-entry-type-page post-entry-10'>
                <div class='entry-content-wrapper clearfix'>
                    <div class='flex_column_table av-equal-height-column-flextable'>
                        <div class="flex_column av_three_fourth  no_margin flex_column_table_cell av-equal-height-column av-align-middle   avia-builder-el-78  el_after_av_one_fourth  avia-builder-el-last  "
                             style='padding:0px 0px 0px 12px ; border-radius:0px; '>
                            <div style='height:5px'
                                 class='hr hr-invisible  avia-builder-el-79  el_before_av_textblock  avia-builder-el-first '>
                                <span class='hr-inner '><span class='hr-inner-style'></span></span></div>
                            <section class="av_textblock_section" itemscope="itemscope"
                                     itemtype="https://schema.org/CreativeWork">
                                <div class='avia_textblock  av_inherit_color' style='color:#ffffff; '
                                     itemprop="text"><p>
                                        <?= $key_copyright['content'] ?>
                                    </p>
                                </div>
                            </section>
                        </div>
                    </div><!--close column table wrapper. Autoclose:  -->
                </div>
            </div>
        </div><!-- close content main div --></div>
</div>

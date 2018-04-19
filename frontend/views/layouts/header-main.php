<?php
/**
 * Created by PhpStorm.
 * User: vietv
 * Date: 3/9/2018
 * Time: 11:15 PM
 */

use yii\helpers\Url;
use common\helpers\FunctionHelper;

?>

<header id='header'
        class=' header_color light_bg_color  av_header_top av_logo_center av_bottom_nav_header av_menu_right av_slim av_header_sticky av_header_shrinking av_header_stretch av_mobile_menu_phone av_header_transparency av_header_searchicon_disabled av_header_unstick_top av_alternate_logo_active av_header_border_disabled'
        role="banner" itemscope="itemscope" itemtype="https://schema.org/WPHeader">

    <a id="advanced_menu_toggle" href="#" aria-hidden='true' data-av_icon=''
       data-av_iconfont='entypo-fontello'></a><a id="advanced_menu_hide" href="#" aria-hidden='true'
                                                 data-av_icon='' data-av_iconfont='entypo-fontello'></a>
    <div id='header_main' class='container_wrap container_wrap_logo'>

        <div class='container av-logo-container'>
            <div class='inner-container'><strong class='logo'><a href='<?= Url::to(['site/index'])?>'>
                        <img height='100' width='300'
                             src='<?= FunctionHelper::get_images_by_photo_location_key('logo', '1')['avatar'] ?>'
                             alt='Roman Plaza'/><span
                                class='subtext'><img src='wp-content/uploads/2017/09/logo.png' class='alternate'
                                                     alt=''/></span></a></strong></div>
        </div>
        <div id='header_main_alternate' class='container_wrap'>
            <div class='container'>
                <nav class='main_menu' data-selectname='Chọn trang' role="navigation" itemscope="itemscope"
                     itemtype="https://schema.org/SiteNavigationElement">
                    <div class="avia-menu av-main-nav-wrap">
                        <ul id="avia-menu" class="menu av-main-nav">


                            <?php $imenu = 0; ?>
                            <?php foreach (FunctionHelper::get_categories_by_parent_id(null) as $key_menu => $value_menu): $imenu++; ?>

                                <li class="menu-item menu-item-type-custom menu-item-object-custom current_page_item menu-item-home menu-item-top-level
                                menu-item-top-level-<?= $imenu ?>">


                                    <?php
                                    if ($value_menu['page_id'] == 2) {
                                        ?>
                                        <a href="<?= Url::to(['site/index']) . '#menu-item-' . $imenu ?>"
                                           itemprop="url"><span
                                                    class="avia-bullet"></span>
                                            <span class="avia-menu-text"><?= $value_menu['title'] ?> </span>
                                            <span class="avia-menu-fx"><span class="avia-arrow-wrap"><span
                                                            class="avia-arrow"></span></span>
                                                </span>
                                        </a>
                                        <?php
                                    } else {
                                        ?>
                                        <a href=" <?= Url::to(['site/view', 'category_slug' => $value_menu['slug']]) ?> "
                                           itemprop="url"><span class="avia-bullet"></span>
                                            <span class="avia-menu-text"><?= $value_menu['title'] ?> </span>
                                            <span class="avia-menu-fx"><span class="avia-arrow-wrap"><span
                                                            class="avia-arrow"></span></span>
                                        </span>
                                        </a>
                                        <?php
                                    }

                                    ?>


                                </li>

                            <?php endforeach; ?>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <!-- end container_wrap-->
    </div>

    <div class='header_bg'></div>

    <!-- end header -->
</header>
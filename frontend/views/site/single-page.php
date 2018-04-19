<?php
/**
 * Created by PhpStorm.
 * User: vietv
 * Date: 3/9/2018
 * Time: 11:19 PM
 */

use yii\helpers\Url;
use common\helpers\FunctionHelper;

/** @var $category \common\models\Category */

$this->title = $category['title'];
$key_newpage = FunctionHelper::get_post_by_page_key('news-page', 5);
$category_key = FunctionHelper::get_category('tin-tuc-7');


?>

<div id='main' class="single_page1" data-scroll-offset='88'>

    <div class='stretch_full container_wrap alternate_color light_bg_color title_container'>
        <div class='container'><strong class='main-title entry-title'>
                <a href='' rel='bookmark'
                   title='Permanent Link: TIN TỨC MỚI'
                   itemprop="headline">
                    <?= $category['title'] ?>
                </a></strong>
            <div class="breadcrumb breadcrumbs avia-breadcrumbs">
                <div class="breadcrumb-trail" xmlns:v="http://rdf.data-vocabulary.org/#"><span
                            class="trail-before"><span class="breadcrumb-title">You are here:</span></span> <a
                            href="<?= Url::to(['site/index']) ?>" title="<?= $category['title'] ?>" rel="home"
                            class="trail-begin">Home</a> <span
                            class="sep">/</span> <span class="trail-end"><?= $category['title'] ?></span></div>
            </div>
        </div>
    </div>


    <div class='container_wrap container_wrap_first main_color sidebar_right '>

        <div class='container template-blog '>

            <main class='content av-content-small alpha units' role="main" itemprop="mainContentOfPage"
                  itemscope="itemscope" itemtype="https://schema.org/Blog">

                <article
                        class='post-entry post-entry-type-standard post-entry-806 post-loop-1 post-parity-odd single-small with-slider post-806 post type-post status-publish format-standard has-post-thumbnail hentry category-khong-phan-loai'
                        itemscope="itemscope" itemtype="https://schema.org/BlogPosting" itemprop="blogPost">

                    <div class='entry-content-wrapper clearfix standard-content'>
                        <?= $category['content'] ?>


                        <div class='single-small'></div>
                        <!--end content-->
            </main>


            <aside class='sidebar sidebar_right  alpha units' role="complementary" itemscope="itemscope"
                   itemtype="https://schema.org/WPSideBar">
                <div class='inner_sidebar extralight-border'>
                    <section id="recent-posts-2" class="widget clearfix widget_recent_entries"><h3 class="widgettitle">
                            Tin nổi bật</h3>
                        <?php foreach ($key_newpage as $key_page => $value_page): ?>
                            <?php if ($value_page['featured'] == 1): ?>
                                <ul>
                                    <li>
                                        <a href="<?= Url::to(['site/view', 'category_slug' => $category_key['slug'], 'content_slug' => $value_page['slug']]) ?>">
                                            <?= $value_page['title'] ?></a>
                                    </li>

                                </ul>
                            <?php endif; ?>
                        <?php endforeach; ?>
                        <span class="seperator extralight-border"></span></section>

                </div>
            </aside>

        </div><!--end container-->

    </div><!-- close default .container_wrap element -->


    <!-- end main -->
</div>

<!-- end wrap_all --></div>
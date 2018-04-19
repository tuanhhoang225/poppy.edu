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
                <?php foreach ($category['posts'] as $key_post => $value_post): ?>
                    <article
                            class='post-entry post-entry-type-standard post-entry-806 post-loop-1 post-parity-odd single-small with-slider post-806 post type-post status-publish format-standard has-post-thumbnail hentry category-khong-phan-loai'
                            itemscope="itemscope" itemtype="https://schema.org/BlogPosting" itemprop="blogPost">

                        <div class='blog-meta'>

                            <a
                                    href='../2018/03/28/roman-plaza-boi-thu-ha-tang-va-tien-ich-khu-tay-ha-noi/index.html'
                                    class='small-preview'
                                    title='ROMAN PLAZA “bội thu”  hạ tầng và tiện ích khu Tây Hà Nội'><img
                                        width="180" height="180"
                                        src="<?= $value_post['avatar'] ?>"
                                        class="attachment-square size-square wp-post-image" alt=""
                                        sizes="(max-width: 180px) 100vw, 180px"/><span class="iconfont"
                                                                                       aria-hidden='true'
                                                                                       data-av_icon=''
                                                                                       data-av_iconfont='entypo-fontello'></span></a>

                        </div>

                        <div class='entry-content-wrapper clearfix standard-content'>
                            <header class="entry-content-header"><h2 class='post-title entry-title' itemprop="headline">
                                    <a
                                            href='<?= Url::to(['site/view', 'category_slug' => $category['slug'], 'content_slug' => $value_post['slug']]) ?>'
                                            rel='bookmark'
                                            title='<?= $value_post['title'] ?>'> <?= $value_post['title'] ?> <span
                                                class='post-format-icon minor-meta'></span> </a></h2>

                            </header>

                            <div class="entry-content" itemprop="text">
                                <?= $value_post['describe'] ?>
                            </div>


                        </div>
                    </article>

                <?php endforeach; ?>
                <div class='single-small'></div>
                <!--end content-->

            </main>


            <aside class='sidebar sidebar_right  alpha units' role="complementary" itemscope="itemscope"
                   itemtype="https://schema.org/WPSideBar">
                <div class='inner_sidebar extralight-border'>
                    <section id="recent-posts-2" class="widget clearfix widget_recent_entries"><h3 class="widgettitle">
                            Tin nổi bật</h3>
                        <?php foreach ($category['posts'] as $key_page => $value_page): ?>
                            <?php if ($value_page['featured'] == 1): ?>
                                <ul>
                                    <li>
                                        <a href="<?= Url::to(['site/view', 'category_slug' => $category['slug'], 'content_slug' => $value_page['slug']]) ?>">
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
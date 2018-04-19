<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class ThemeAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'theme/css/bootstrap.css',
        'theme/css/Reset.css',
        'theme/css/Layout1.css',
        'theme/css/Site.css',
        'theme/css/fixbugs.css',
        'theme/css/Style.css',
        'theme/css/WebResource0ecd.css',
        'theme/css/WebResource2ee9.css',
        'theme/css/WebResource351e.css',
        'theme/css/WebResource798d.css',
        'theme/css/WebResource4002.css',
        'theme/css/WebResourcea955.css',
        'theme/css/WebResourcecca9.css',
        'theme/css/owl.carousel.css',
        'theme/css/owl.theme.default.css',
        'theme/css/pro-folio.css',
        'theme/css/slick.css',
        'css/site.css',
        'theme/css/NavPath.css',
        'theme/css/Article.css',
        'theme/css/style-menu-left.css',
        'theme/css/Contact.css'
    ];
    public $js = [
        'theme/js/owl.carousel.js',
        'js/bootstrap.min.js',
        'js/setting.js'
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}

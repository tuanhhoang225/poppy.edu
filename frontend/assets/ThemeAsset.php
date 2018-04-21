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
        'theme/css/jquery-ui.min.css',
        'theme/css/animate.css',
        'theme/css/css-plugin-collections.css',
        'theme/css/menuzord-skins/menuzord-rounded-boxed.css',
        'theme/css/style-main.css',
        'theme/css/preloader.css',
        'theme/css/custom-bootstrap-margin-padding.css',
        'theme/css/responsive.css',
        'theme/js/revolution-slider/css/settings.css',
        'theme/js/revolution-slider/css/layers.css',
        'theme/js/revolution-slider/css/navigation.css',
        'theme/css/colors/theme-skin-color-set-1.css',
    ];
    public $js = [
        'js/jquery-2.2.4.min.js',
        'js/jquery-ui.min.js',
        'js/bootstrap.min.js',
        'theme/js/revolution-slider/js/jquery.themepunch.tools.min.js',
        'theme/js/revolution-slider/js/jquery.themepunch.revolution.min.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}

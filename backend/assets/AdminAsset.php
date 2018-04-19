<?php

namespace backend\assets;

use yii\web\AssetBundle;

/**
 * Main backend application asset bundle.
 */
class AdminAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/loaders.css',
        'css/site.css',
        'admin-lte-2/bower_components/font-awesome/css/font-awesome.min.css',
        'admin-lte-2/dist/css/AdminLTE.min.css',
        'admin-lte-2/dist/css/skins/_all-skins.min.css',
        'admin-lte-2/plugins/iCheck/all.css',
        'bootstrap/css/bootstrap-switch.min.css',
        'bootstrap/css/select2.min.css',
        'css/nestable.css',
        'bootstrap3-editable/css/bootstrap-editable.css'
    ];
    public $js = [
        'admin-lte-2/bower_components/jquery-ui/jquery-ui.min.js',
        'admin-lte-2/bower_components/bootstrap/dist/js/bootstrap.min.js',
        'admin-lte-2/plugins/iCheck/icheck.min.js',
        'admin-lte-2/dist/js/adminlte.min.js',
        'bootstrap/js/bootstrap-switch.min.js',
        'bootstrap/js/select2.full.min.js',
        'ckeditor/ckeditor.js',
        'ckeditor/samples/js/sample.js',
        'js/jquery.nestable.js',
        'bootstrap3-editable/js/bootstrap-editable.min.js',
        'js/notify.js',
        'js/setting.js'
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}

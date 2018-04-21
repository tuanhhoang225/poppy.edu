<?php

/* @var $this \yii\web\View */

/* @var $content string */

use yii\helpers\Html;
use common\helpers\FunctionHelper;
use frontend\assets\ThemeAsset;

ThemeAsset::register($this);

?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<?= $this->render('header-main') ?>

<?= $content ?>


<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>

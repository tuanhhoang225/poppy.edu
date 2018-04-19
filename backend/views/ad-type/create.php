<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\AdType */

$this->title = Yii::t('backend', 'Create Ad Type');
$this->params['breadcrumbs'][] = ['label' => Yii::t('backend', 'Ad Types'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ad-type-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

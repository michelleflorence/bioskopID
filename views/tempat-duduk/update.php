<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\TempatDuduk $model */

$this->title = 'Update data Tempat Duduk: ' . $model->id_tempat_duduk;
$this->params['breadcrumbs'][] = ['label' => 'Tempat Duduk Film', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_tempat_duduk, 'url' => ['view', 'id' => $model->id_tempat_duduk]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tempat-duduk-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

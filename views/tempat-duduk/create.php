<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\TempatDuduk $model */

$this->title = 'Tambah data Tempat Duduk';
$this->params['breadcrumbs'][] = ['label' => 'Tempat Duduk Film', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tempat-duduk-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

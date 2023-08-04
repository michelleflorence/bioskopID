<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Jadwal $model */

$this->title = 'Tambah data Jadwal';
$this->params['breadcrumbs'][] = ['label' => 'Jadwal Film', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="jadwal-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

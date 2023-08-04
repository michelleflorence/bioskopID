<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Jadwal $model */ 

$this->title = 'Update data Jadwal: ' . $model->id_jadwal;
$this->params['breadcrumbs'][] = ['label' => 'Jadwal Film', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_jadwal, 'url' => ['view', 'id' => $model->id_jadwal]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="jadwal-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

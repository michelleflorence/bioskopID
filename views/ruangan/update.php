<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Ruangan $model */

$this->title = 'Update Ruangan: ' . $model->id_ruangan;
$this->params['breadcrumbs'][] = ['label' => 'Ruangans', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_ruangan, 'url' => ['view', 'id' => $model->id_ruangan]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="ruangan-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

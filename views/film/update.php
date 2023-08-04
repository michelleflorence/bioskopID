<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Film $model */ 

$this->title = 'Update data Film: ' . $model->id_film;
$this->params['breadcrumbs'][] = ['label' => 'Detail Film', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_film, 'url' => ['view', 'id' => $model->id_film]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="film-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

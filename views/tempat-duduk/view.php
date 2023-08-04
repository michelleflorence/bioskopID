<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\TempatDuduk $model */

$this->title = $model->id_tempat_duduk;
$this->params['breadcrumbs'][] = ['label' => 'Tempat Duduk Film', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="tempat-duduk-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id_tempat_duduk], ['class' => 'btn btn-primary btn-lg']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id_tempat_duduk], [
            'class' => 'btn btn-danger btn-lg',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            //'id_tempat_duduk',
            'kode',
        ],
    ]) ?>

</div>

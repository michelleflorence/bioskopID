<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\Jadwal $model */ 

$this->title = $model->id_jadwal;
$this->params['breadcrumbs'][] = ['label' => 'Jadwal Film', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="jadwal-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id_jadwal], ['class' => 'btn btn-primary btn-lg']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id_jadwal], [
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
            //'id_jadwal',
            'tanggal_film:ntext',
            'jam',
        ],
    ]) ?>

</div>

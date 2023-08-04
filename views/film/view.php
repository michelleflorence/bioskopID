<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\Film $model */

$this->title = $model->id_film;
$this->params['breadcrumbs'][] = ['label' => 'Detail Film', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="film-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id_film], ['class' => 'btn btn-primary btn-lg']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id_film], [
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
            //'id_film',
            'nama_film:ntext',
        ],
    ]) ?>

</div>

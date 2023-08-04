<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var yii\bootstrap5\ActiveForm $form */

/** @var app\models\PemesananFilm $model */

$this->title = $model->id_pemesanan;
$this->params['breadcrumbs'][] = ['label' => 'Pemesanan Tiket Bioskop', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="pemesanan-film-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id_pemesanan], ['class' => 'btn btn-primary btn-lg']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id_pemesanan], [
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
            //'id_pemesanan',
            'nama_pelanggan:ntext',
            'film.nama_film',
            'jadwal.tanggal_film',
            'jadwal.jam',
            'ruangan.nama_ruangan',
            'seat.kode',
        ],
    ]) ?>

</div>

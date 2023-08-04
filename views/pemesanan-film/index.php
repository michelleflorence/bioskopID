<?php

use yii\helpers\Html;
use yii\grid\GridView;

/** @var yii\web\View $this */
/* @var $searchModel app\models\PemesananFilmSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Pemesanan Tiket Bioskop';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pemesanan-film-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Pesan Tiket', ['create'], ['class' => 'btn btn-success btn-lg']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        //'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            //'id_pemesanan',
            'nama_pelanggan:ntext',
            'film.nama_film',
            'jadwal.tanggal_film',
            'jadwal.jam',
            'ruangan.nama_ruangan',
            'seat.kode',
            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>

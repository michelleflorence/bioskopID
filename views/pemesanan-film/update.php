<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var yii\bootstrap5\ActiveForm $form */
/** @var app\models\PemesananFilm $model */

$this->title = 'Update Pemesanan Film: ' . $model->id_pemesanan;
$this->params['breadcrumbs'][] = ['label' => 'Pemesanan Tiket Bioskop', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_pemesanan, 'url' => ['view', 'id' => $model->id_pemesanan]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="pemesanan-film-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

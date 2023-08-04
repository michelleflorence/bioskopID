<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var yii\bootstrap5\ActiveForm $form */
/** @var app\models\PemesananFilmSearch $model */
?>

<div class="pemesanan-film-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_pemesanan') ?>

    <?= $form->field($model, 'nama_pelanggan') ?>

    <?= $form->field($model, 'id_film') ?>

    <?= $form->field($model, 'id_jadwal') ?>

    <?= $form->field($model, 'id_ruangan') ?>

    <?php // echo $form->field($model, 'id_tempat_duduk') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

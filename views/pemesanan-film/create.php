<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var yii\bootstrap5\ActiveForm $form */
/** @var app\models\PemesananFilm $model */

$this->title = 'Form Tiket Bioskop';
$this->params['breadcrumbs'][] = ['label' => 'Pemesanan Tiket Bioskop', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pemesanan-film-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

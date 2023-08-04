<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var yii\bootstrap5\ActiveForm $form */
/** @var app\models\Ruangan  $model */

$this->title = 'Tambah data Ruangan';
$this->params['breadcrumbs'][] = ['label' => 'Ruangan Film', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ruangan-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

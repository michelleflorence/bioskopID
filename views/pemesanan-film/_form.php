<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;

/** @var yii\web\View $this */
/** @var yii\bootstrap5\ActiveForm $form */
/** @var app\models\PemesananFilm $model */
?>

<div class="pemesanan-film-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nama_pelanggan')->textarea(['rows' => 6]) ?>

    <?php //$form->field($model, 'id_film')->textInput() ?>
    <?php 
        $dataPost=ArrayHelper::map(\app\models\Film::find()
        ->asArray()->all(), 'id_film', 'nama_film');
            echo $form->field($model, 'id_film')
                ->dropDownList(
                    $dataPost,           
                    ['id_film'=>'nama_film']
                );
    
    ?>

    <?php //$form->field($model, 'id_jadwal')->textInput() ?>
    <?php 
        $dataPost=ArrayHelper::map(\app\models\Jadwal::find()
        ->asArray()->all(), 'id_jadwal', 'tanggal_film');
            echo $form->field($model, 'id_jadwal')
                ->dropDownList(
                    $dataPost,           
                    ['id_jadwal'=>'tanggal_film']
                );
    ?>

    <?php 
        $dataPost=ArrayHelper::map(\app\models\Jadwal::find()
        ->asArray()->all(), 'id_jadwal', 'jam');
            echo $form->field($model, 'id_jadwal')
                ->dropDownList(
                    $dataPost,           
                    ['id_jadwal'=>'jam']
                );
    ?>

    <?php //$form->field($model, 'id_ruangan')->textInput() ?>
    <?php 
        $dataPost=ArrayHelper::map(\app\models\Ruangan::find()
        ->asArray()->all(), 'id_ruangan', 'nama_ruangan');
            echo $form->field($model, 'id_ruangan')
                ->dropDownList(
                    $dataPost,           
                    ['id_ruangan'=>'nama_ruangan']
                );
    ?>

    <?php //$form->field($model, 'id_tempat_duduk')->textInput() ?>
    <?php 
        $dataPost=ArrayHelper::map(\app\models\TempatDuduk::find()
        ->asArray()->all(), 'id_tempat_duduk', 'kode');
            echo $form->field($model, 'id_tempat_duduk')
                ->dropDownList(
                    $dataPost,           
                    ['id_tempat_duduk'=>'kode']
                );
    ?>

    <div class="form-group">
        <?= Html::submitButton('Simpan', ['class' => 'btn btn-success btn-lg']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

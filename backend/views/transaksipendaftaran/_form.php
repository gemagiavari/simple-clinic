<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;


/** @var yii\web\View $this */
/** @var backend\models\Transaksipendaftaran $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="transaksipendaftaran-form">

    <?php $form = ActiveForm::begin(); ?>

    <?php //= $form->field($model, 'nama_pasien')->textInput(['maxlength' => true]) ?>

    <?php 
    $dataPost=ArrayHelper::map(\backend\models\Pasien::find()
    ->asArray()->all(), 'nama_pasien', 'nama_pasien');
	echo $form->field($model, 'nama_pasien')
        ->dropDownList(
            $dataPost,           
            ['nama_pasien'=>'nama_pasien']
        );
    ?>

    <?php //= $form->field($model, 'nama_tindakan')->textInput(['maxlength' => true]) ?>

    <?php 
    $dataPost=ArrayHelper::map(\backend\models\Tindakan::find()
    ->asArray()->all(), 'nama_tindakan', 'nama_tindakan');
	echo $form->field($model, 'nama_tindakan')
        ->dropDownList(
            $dataPost,           
            ['nama_tindakan'=>'nama_tindakan']
        );
    ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

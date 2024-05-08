<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;


/** @var yii\web\View $this */
/** @var frontend\models\Transaksiapotek $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="transaksiapotek-form">

    <?php $form = ActiveForm::begin(); ?>

    <?php //= $form->field($model, 'nama_pasien')->textInput(['maxlength' => true]) ?>

    <?php 
    $dataPost=ArrayHelper::map(\frontend\models\Pasien::find()
    ->asArray()->all(), 'nama_pasien', 'nama_pasien');
	echo $form->field($model, 'nama_pasien')
        ->dropDownList(
            $dataPost,           
            ['nama_pasien'=>'nama_pasien']
        );
    ?>

    <?php //= $form->field($model, 'nama_obat')->textInput(['maxlength' => true]) ?>

    <?php 
    $dataPost=ArrayHelper::map(\frontend\models\Obat::find()
    ->asArray()->all(), 'nama_obat', 'nama_obat');
	echo $form->field($model, 'nama_obat')
        ->dropDownList(
            $dataPost,           
            ['nama_obat'=>'nama_obat']
        );
    ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;


/** @var yii\web\View $this */
/** @var backend\models\Penerimaanuangapotek $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="penerimaanuangapotek-form">

    <?php $form = ActiveForm::begin(); ?>

    <?php //= $form->field($model, 'id_faktur')->textInput() ?>

    <?php 
    $dataPost=ArrayHelper::map(\backend\models\Transaksiapotek::find()
    ->asArray()->all(), 'id_faktur', 'id_faktur');
	echo $form->field($model, 'id_faktur')
        ->dropDownList(
            $dataPost,           
            ['id_faktur'=>'id_faktur']
        );
    ?>

    <?php //= $form->field($model, 'pembayaran_ke')->textInput(['maxlength' => true]) ?>

    <?php 
    $dataPost=ArrayHelper::map(\backend\models\Bank::find()
    ->asArray()->all(), 'nama_bank', 'nama_bank');
	echo $form->field($model, 'pembayaran_ke')
        ->dropDownList(
            $dataPost,           
            ['nama_bank'=>'nama_bank']
        );
    ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

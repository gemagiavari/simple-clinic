<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var backend\models\Bank $model */

$this->title = 'Update Bank: ' . $model->nama_bank;
$this->params['breadcrumbs'][] = ['label' => 'Banks', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->nama_bank, 'url' => ['view', 'nama_bank' => $model->nama_bank]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="bank-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var backend\models\Transaksiapotek $model */

$this->title = 'Update Transaksiapotek: ' . $model->id_faktur;
$this->params['breadcrumbs'][] = ['label' => 'Transaksiapoteks', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_faktur, 'url' => ['view', 'id_faktur' => $model->id_faktur]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="transaksiapotek-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

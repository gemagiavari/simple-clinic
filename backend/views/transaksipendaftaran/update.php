<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var backend\models\Transaksipendaftaran $model */

$this->title = 'Update Transaksipendaftaran: ' . $model->id_faktur;
$this->params['breadcrumbs'][] = ['label' => 'Transaksipendaftarans', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_faktur, 'url' => ['view', 'id_faktur' => $model->id_faktur]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="transaksipendaftaran-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

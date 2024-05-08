<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var backend\models\Tindakan $model */

$this->title = 'Update Tindakan: ' . $model->nama_tindakan;
$this->params['breadcrumbs'][] = ['label' => 'Tindakans', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->nama_tindakan, 'url' => ['view', 'nama_tindakan' => $model->nama_tindakan]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tindakan-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

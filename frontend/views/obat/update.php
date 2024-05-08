<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\Obat $model */

$this->title = 'Update Obat: ' . $model->nama_obat;
$this->params['breadcrumbs'][] = ['label' => 'Obats', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->nama_obat, 'url' => ['view', 'nama_obat' => $model->nama_obat]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="obat-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

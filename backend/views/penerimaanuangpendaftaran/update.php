<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var backend\models\Penerimaanuangpendaftaran $model */

$this->title = 'Update Penerimaanuangpendaftaran: ' . $model->id_penerimaan;
$this->params['breadcrumbs'][] = ['label' => 'Penerimaanuangpendaftarans', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_penerimaan, 'url' => ['view', 'id_penerimaan' => $model->id_penerimaan]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="penerimaanuangpendaftaran-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

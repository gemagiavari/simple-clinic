<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\Transaksipendaftaran $model */

$this->title = 'Create Transaksi Pendaftaran';
$this->params['breadcrumbs'][] = ['label' => 'Transaksipendaftarans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="transaksipendaftaran-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

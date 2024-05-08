<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var backend\models\Transaksiapotek $model */

$this->title = 'Create Transaksiapotek';
$this->params['breadcrumbs'][] = ['label' => 'Transaksiapoteks', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="transaksiapotek-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

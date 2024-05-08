<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\Penerimaanuangpendaftaran $model */

$this->title = 'Create Penerimaan Uang Pendaftaran';
$this->params['breadcrumbs'][] = ['label' => 'Penerimaanuangpendaftarans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="penerimaanuangpendaftaran-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

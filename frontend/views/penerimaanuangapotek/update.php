<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\Penerimaanuangapotek $model */

$this->title = 'Update Penerimaanuangapotek: ' . $model->id_penerimaan;
$this->params['breadcrumbs'][] = ['label' => 'Penerimaanuangapoteks', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_penerimaan, 'url' => ['view', 'id_penerimaan' => $model->id_penerimaan]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="penerimaanuangapotek-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

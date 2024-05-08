<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var backend\models\Penerimaanuangapotek $model */

$this->title = 'Create Penerimaanuangapotek';
$this->params['breadcrumbs'][] = ['label' => 'Penerimaanuangapoteks', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="penerimaanuangapotek-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

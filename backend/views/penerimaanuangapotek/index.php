<?php

use backend\models\Penerimaanuangapotek;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var backend\models\PenerimaanuangapotekSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Penerimaan Uang Apotek';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="penerimaanuangapotek-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Penerimaan Uang Apotek', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_penerimaan',
            'id_faktur',
            'transaksiapotek.nama_pasien',
            'transaksiapotek.nama_obat',
            'transaksiapotek.obat.harga_jual',
            'pembayaran_ke',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Penerimaanuangapotek $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id_penerimaan' => $model->id_penerimaan]);
                 }
            ],
        ],
    ]); ?>


</div>

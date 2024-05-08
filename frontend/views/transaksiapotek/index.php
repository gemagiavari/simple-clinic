<?php

use frontend\models\Transaksiapotek;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\TransaksiapotekSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Transaksi Apotek';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="transaksiapotek-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Transaksi Apotek', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_faktur',
            'nama_pasien',
            'nama_obat',
            'obat.harga_jual',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Transaksiapotek $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id_faktur' => $model->id_faktur]);
                 }
            ],
        ],
    ]); ?>


</div>

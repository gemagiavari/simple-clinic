<?php

use frontend\models\Penerimaanuangpendaftaran;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\PenerimaanuangpendaftaranSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Penerimaan Uang Pendaftaran';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="penerimaanuangpendaftaran-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Penerimaan Uang Pendaftaran', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_penerimaan',
            'id_faktur',
            'transaksipendaftaran.nama_pasien',
            'transaksipendaftaran.nama_tindakan',
            'transaksipendaftaran.tindakan.harga_jual',
            'pembayaran_ke',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Penerimaanuangpendaftaran $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id_penerimaan' => $model->id_penerimaan]);
                 }
            ],
        ],
    ]); ?>


</div>

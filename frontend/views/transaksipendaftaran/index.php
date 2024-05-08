<?php

use frontend\models\Transaksipendaftaran;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\TransaksipendaftaranSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Transaksi Pendaftaran';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="transaksipendaftaran-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Transaksi Pendaftaran', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_faktur',
            'nama_pasien',
            'nama_tindakan',
            'tindakan.harga_jual',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Transaksipendaftaran $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id_faktur' => $model->id_faktur]);
                 }
            ],
        ],
    ]); ?>


</div>

<?php

namespace backend\controllers;

use backend\models\Penerimaanuangpendaftaran;
use backend\models\PenerimaanuangpendaftaranSearch;

//tambahkan ini.
use yii\filters\AccessControl;

use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * PenerimaanuangpendaftaranController implements the CRUD actions for Penerimaanuangpendaftaran model.
 */
class PenerimaanuangpendaftaranController extends Controller
{
    /**
     * @inheritDoc
     */
    public function behaviors()
    {
        return array_merge(
            parent::behaviors(),
            [
                //tambahkan ini spy tidak bisa diakses oleh pengguna yg tidak login.
                'access' => [
                    'class' => AccessControl::class,
                    'rules' => [
                        [
                            'allow' => true,
                            'roles' => ['managePenerimaanUangPendaftaran'],

                        ],
                    ],
                ],
                'verbs' => [
                    'class' => VerbFilter::className(),
                    'actions' => [
                        'delete' => ['POST'],
                    ],
                ],
            ]
        );
    }

    /**
     * Lists all Penerimaanuangpendaftaran models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new PenerimaanuangpendaftaranSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Penerimaanuangpendaftaran model.
     * @param int $id_penerimaan Id Penerimaan
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id_penerimaan)
    {
        return $this->render('view', [
            'model' => $this->findModel($id_penerimaan),
        ]);
    }

    /**
     * Creates a new Penerimaanuangpendaftaran model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Penerimaanuangpendaftaran();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'id_penerimaan' => $model->id_penerimaan]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Penerimaanuangpendaftaran model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id_penerimaan Id Penerimaan
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id_penerimaan)
    {
        $model = $this->findModel($id_penerimaan);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id_penerimaan' => $model->id_penerimaan]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Penerimaanuangpendaftaran model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $id_penerimaan Id Penerimaan
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id_penerimaan)
    {
        $this->findModel($id_penerimaan)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Penerimaanuangpendaftaran model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id_penerimaan Id Penerimaan
     * @return Penerimaanuangpendaftaran the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id_penerimaan)
    {
        if (($model = Penerimaanuangpendaftaran::findOne(['id_penerimaan' => $id_penerimaan])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
<?php

namespace frontend\controllers;

use frontend\models\Transaksipendaftaran;
use frontend\models\TransaksipendaftaranSearch;

//tambahkan ini.
use yii\filters\AccessControl;

use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * TransaksipendaftaranController implements the CRUD actions for Transaksipendaftaran model.
 */
class TransaksipendaftaranController extends Controller
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
                            'actions' => ['index'],
                            'allow' => true,
                            'roles' => ['indexTransaksiPendaftaran'],
                        ],
                        [
                            'actions' => ['create'],
                            'allow' => true,
                            'roles' => ['createTransaksiPendaftaran'],
                        ],
                        [
                            'actions' => ['view'],
                            'allow' => true,
                            'roles' => ['viewTransaksiPendaftaran'],
                        ],
                        [
                            'actions' => ['update'],
                            'allow' => true,
                            'roles' => ['updateTransaksiPendaftaran'],
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
     * Lists all Transaksipendaftaran models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new TransaksipendaftaranSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Transaksipendaftaran model.
     * @param int $id_faktur Id Faktur
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id_faktur)
    {
        return $this->render('view', [
            'model' => $this->findModel($id_faktur),
        ]);
    }

    /**
     * Creates a new Transaksipendaftaran model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Transaksipendaftaran();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'id_faktur' => $model->id_faktur]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Transaksipendaftaran model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id_faktur Id Faktur
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id_faktur)
    {
        $model = $this->findModel($id_faktur);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id_faktur' => $model->id_faktur]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Transaksipendaftaran model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $id_faktur Id Faktur
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id_faktur)
    {
        $this->findModel($id_faktur)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Transaksipendaftaran model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id_faktur Id Faktur
     * @return Transaksipendaftaran the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id_faktur)
    {
        if (($model = Transaksipendaftaran::findOne(['id_faktur' => $id_faktur])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}

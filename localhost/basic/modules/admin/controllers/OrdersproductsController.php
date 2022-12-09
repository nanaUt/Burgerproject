<?php

namespace app\modules\admin\controllers;

use app\modules\admin\models\Ordersproducts;
use app\modules\admin\models\OrdersproductsSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * OrdersproductsController implements the CRUD actions for Ordersproducts model.
 */
class OrdersproductsController extends Controller
{
    /**
     * @inheritDoc
     */
    public function behaviors()
    {
        return array_merge(
            parent::behaviors(),
            [
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
     * Lists all Ordersproducts models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new OrdersproductsSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Ordersproducts model.
     * @param int $orders_id Orders ID
     * @param int $products_id Products ID
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($orders_id, $products_id)
    {
        return $this->render('view', [
            'model' => $this->findModel($orders_id, $products_id),
        ]);
    }

    /**
     * Creates a new Ordersproducts model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Ordersproducts();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'orders_id' => $model->orders_id, 'products_id' => $model->products_id]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Ordersproducts model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $orders_id Orders ID
     * @param int $products_id Products ID
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($orders_id, $products_id)
    {
        $model = $this->findModel($orders_id, $products_id);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'orders_id' => $model->orders_id, 'products_id' => $model->products_id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Ordersproducts model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $orders_id Orders ID
     * @param int $products_id Products ID
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($orders_id, $products_id)
    {
        $this->findModel($orders_id, $products_id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Ordersproducts model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $orders_id Orders ID
     * @param int $products_id Products ID
     * @return Ordersproducts the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($orders_id, $products_id)
    {
        if (($model = Ordersproducts::findOne(['orders_id' => $orders_id, 'products_id' => $products_id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}

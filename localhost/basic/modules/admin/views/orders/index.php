<?php

use app\modules\admin\models\Orders;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use app\modules\admin\models\Customers;
use app\modules\admin\models\Payments;

/** @var yii\web\View $this */
/** @var app\modules\admin\models\OrdersSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Заказы';
?>
<div class="orders-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Добавить новый заказ', ['create'], ['class' => 'btn btn-success ye']) ?>
        <?= Html::a('Назад', ['default/base'], ['class' => 'btn btn-success']) ?>
    
   <style>
    
   .ye {
        float:left;
        margin-right:5px;
        }

   </style>
   </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            [
               'attribute' => 'customer_id',
               'filter' => Customers::find()->select(["CONCAT(surname, ' ', name) AS full_name", 'id'])->indexBy('id')->column(),
               'value' => function($data){
                    return $data->customer->surname. ' ' .$data->customer->name;
                },
            ], 
            'date',
            'sum',
            [
               'attribute' => 'payment',
               'filter' => Payments::find()->select(['payments', 'id'])->indexBy('id')->column(),
               'value' => function($data){
                    return $data->payment0->payments;
                },
            ],
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Orders $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>


</div>

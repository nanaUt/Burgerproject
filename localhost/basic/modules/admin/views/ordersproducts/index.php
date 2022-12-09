<?php

use app\modules\admin\models\Ordersproducts;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use app\modules\admin\models\Products;

/** @var yii\web\View $this */
/** @var app\modules\admin\models\OrdersproductsSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Заказанные позиции';
?>
<div class="ordersproducts-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Добавить позицию в заказ', ['create'], ['class' => 'btn btn-success']) ?>
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

            'orders_id',
            [
               'attribute' => 'products_id',
               'filter' => Products::find()->select(['name', 'id'])->indexBy('id')->column(),
               'value' => function($data){
                    return $data->products->name;
                },
            ],
            'quanity',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Ordersproducts $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'orders_id' => $model->orders_id, 'products_id' => $model->products_id]);
                 }
            ],
        ],
    ]); ?>


</div>

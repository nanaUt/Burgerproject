<?php

use app\modules\admin\models\Courier;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use app\modules\admin\models\Customers;

/** @var yii\web\View $this */
/** @var app\modules\admin\models\CourierSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */
$this->title = 'Печать чеков на доставку';
?>

<div class="courier-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <?php  echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            'id',
            [
               'attribute' => 'customer_id',
               'filter' => Customers::find()->select(["CONCAT(surname, ' ', name) AS full_name", 'id'])->indexBy('id')->column(),
               'value' => function($data){
                    return $data->customer->surname. ' ' .$data->customer->name;
                },
            ],
            'date',
            [
               'attribute' => 'adress',
               'filter' => Customers::find()->select(['adress', 'id'])->indexBy('id')->column(),
               'value' => function($data){
                    return $data->customer->adress;
                },
            ],
            //'sum',
           [
            'format' => 'html',
            'value' => function($model) {
                return Html::a(
                    '<img src="images/icon.png">'
                );
            }
           ]
        ],
    ]); ?>


</div>

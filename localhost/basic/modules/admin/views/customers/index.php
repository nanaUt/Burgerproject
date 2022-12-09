<?php

use app\modules\admin\models\Customers;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\modules\admin\models\CustomersSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Заказчики';
?>
<div class="customers-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Добавить нового заказчика', ['create'], ['class' => 'btn btn-success ye']) ?>
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
            'surname',
            'name',
            'email:email',
            'number',
            'adress',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Customers $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>


</div>

<?php

use app\modules\admin\models\Products;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use app\modules\admin\models\Categories;

/** @var yii\web\View $this */
/** @var app\modules\admin\models\ProductsSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */
$this->title = 'Позиции меню';
?>
<div class="products-index">

    <h1><?= Html::encode($this->title) ?></h1>

    
    <p>
        <?= Html::a('Добавить новую позицию в меню', ['create'], ['class' => 'btn btn-success ye']) ?>
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
               'attribute' => 'category_id',
               'filter' => Categories::find()->select(['name', 'id'])->indexBy('id')->column(),
               'value' => function($data){
                    return $data->category->name;
                },
            ],
            'name',
            'price',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Products $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>


</div>

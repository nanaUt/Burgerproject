<?php

use app\modules\adminburger\models\Orprod;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\modules\adminburger\models\OrprodSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Orprods';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="orprod-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Orprod', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'orders_id',
            'products_id',
            'quanity',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Orprod $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'orders_id' => $model->orders_id, 'products_id' => $model->products_id]);
                 }
            ],
        ],
    ]); ?>


</div>

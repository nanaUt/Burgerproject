<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use app\modules\admin\models\Products;

/** @var yii\web\View $this */
/** @var app\modules\admin\models\Ordersproducts $model */

$this->title = $model->orders_id;
\yii\web\YiiAsset::register($this);
?>
<div class="ordersproducts-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Изменить', ['update', 'orders_id' => $model->orders_id, 'products_id' => $model->products_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Удалить', ['delete', 'orders_id' => $model->orders_id, 'products_id' => $model->products_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Вы действительно хотите удалить данную позицию из заказа?',
                'method' => 'post',
            ],
        ]) ?>
        <?= Html::a('Назад', ['products/index'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'orders_id',
            [
               'attribute' => 'products_id',
               'filter' => Products::find()->select(['name', 'id'])->indexBy('id')->column(),
               'value' => function($data){
                    return $data->products->name;
                },
            ],
            'quanity',
        ],
    ]) ?>

</div>

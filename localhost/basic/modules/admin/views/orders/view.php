<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use app\modules\admin\models\Customers;
use app\modules\admin\models\Payments;

/** @var yii\web\View $this */
/** @var app\modules\admin\models\Orders $model */

$this->title = $model->id;
\yii\web\YiiAsset::register($this);
?>
<div class="orders-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Изменить', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Удалить', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Вы уверены, что хотите удалить данные о заказе?',
                'method' => 'post',
            ],
        ]) ?>
        <?= Html::a('Назад', ['orders/index'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
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
        ],
    ]) ?>

</div>

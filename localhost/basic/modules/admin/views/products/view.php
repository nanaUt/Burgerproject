<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use app\modules\admin\models\Categories;

/** @var yii\web\View $this */
/** @var app\modules\admin\models\Products $model */

$this->title = $model->name;
\yii\web\YiiAsset::register($this);
?>
<div class="products-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Изменить', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Удалить', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Вы уверены, что хотите удалить данные о позиции меню?',
                'method' => 'post',
            ],
        ]) ?>
        <?= Html::a('Назад', ['products/index'], ['class' => 'btn btn-success']) ?> 
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
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
        ],
    ]) ?>

</div>

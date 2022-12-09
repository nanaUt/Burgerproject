<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\modules\adminburger\models\Orprod $model */

$this->title = $model->orders_id;
$this->params['breadcrumbs'][] = ['label' => 'Orprods', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="orprod-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'orders_id' => $model->orders_id, 'products_id' => $model->products_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'orders_id' => $model->orders_id, 'products_id' => $model->products_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'orders_id',
            'products_id',
            'quanity',
        ],
    ]) ?>

</div>

<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\modules\admin\models\Ordersproducts $model */

$this->title = 'Изменить данные о заказанной позиции: ' . $model->orders_id;
?>
<div class="ordersproducts-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

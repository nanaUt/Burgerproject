<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\modules\adminburger\models\Orprod $model */

$this->title = 'Update Orprod: ' . $model->orders_id;
$this->params['breadcrumbs'][] = ['label' => 'Orprods', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->orders_id, 'url' => ['view', 'orders_id' => $model->orders_id, 'products_id' => $model->products_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="orprod-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

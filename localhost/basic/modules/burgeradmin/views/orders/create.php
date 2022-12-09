<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\modules\burgeradmin\models\Orders $model */

$this->title = 'Оформление заказа';
//$this->params['breadcrumbs'][] = ['label' => 'Orders', 'url' => ['index']];
//$this->params['breadcrumbs'][] = $this->title;
?>
<div class="orders-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'modelsOrprod'=>$modelsOrprod,
    ]) ?>

</div>

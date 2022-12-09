<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\modules\burgeradmin\models\Customers $model */

$this->title = 'Заполните информацию о себе';
?>
<div class="customers-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

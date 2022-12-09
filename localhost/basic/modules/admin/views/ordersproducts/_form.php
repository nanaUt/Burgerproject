<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\modules\admin\models\Products;

/** @var yii\web\View $this */
/** @var app\modules\admin\models\Ordersproducts $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="ordersproducts-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'orders_id')->textInput() ?>


    <?= $form->field($model, 'products_id')->dropDownList(
    \yii\helpers\ArrayHelper::map(\app\modules\admin\models\Products::find()->all(), 'id', 'name'))?>

    <?= $form->field($model, 'quanity')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
        <?= Html::a('Назад', ['orderproducts/index'], ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

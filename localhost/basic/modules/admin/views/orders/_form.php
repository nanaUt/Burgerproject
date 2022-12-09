<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\modules\admin\models\Payments;

/** @var yii\web\View $this */
/** @var app\modules\admin\models\Orders $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="orders-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'customer_id')->textInput() ?>

    <?= $form->field($model, 'date')->textInput()->widget(\yii\widgets\MaskedInput::class, ['mask' => '9999-99-99 99:99:99']) ?>

    <?= $form->field($model, 'sum')->textInput() ?>

    <?= $form->field($model, 'payment')->dropDownList(
    \yii\helpers\ArrayHelper::map(\app\modules\admin\models\Payments::find()->all(), 'id', 'payments'))?>

    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
        <?= Html::a('Назад', ['orders/index'], ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

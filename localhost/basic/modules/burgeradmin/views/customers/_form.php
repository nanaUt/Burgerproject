<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\modules\burgeradmin\models\Customers $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="customers-form">
    <p><a class="btn btn-primary" href="http://localhost/basic/web/index.php?r=burgeradmin%2Forders%2Fcreate">У меня уже есть идентификационный код</a></p>

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'surname')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'email')->input('email') ?>

    <?= $form->field($model, 'number')->widget(\yii\widgets\MaskedInput::class, ['mask' => '+7(999)999-99-99']) ?>

    <?= $form->field($model, 'adress')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Получить код', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

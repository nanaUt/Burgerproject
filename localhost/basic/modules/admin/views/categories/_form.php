<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\modules\admin\models\Categories $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="categories-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id')->textInput() ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Сохранить изменения', ['class' => 'btn btn-success']) ?>
        <?= Html::a('Назад', ['categories/index'], ['class' => 'btn btn-success']) ?> 
    </div>

    <?php ActiveForm::end(); ?>

</div>

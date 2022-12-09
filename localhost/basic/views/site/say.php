<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>
<?php $form = ActiveForm::begin(); ?>

    <h1><?= Html::encode('Заполните данные для оплаты') ?></h1>

    <?= $form->field($model, 'name')->label('Номер карты')->widget(\yii\widgets\MaskedInput::class, ['mask' => '9999 9999 9999 9999']) ?>
    <?= $form->field($model, 'email')->label('Владелец карты') ?>
    <?= $form->field($model, 'age')->label('CVV')->textInput(['maxlength' => "3"])?>
    <?= $form->field($model, 'favoritecuisine') -> dropdownlist ([ 
        '1' => 'Январь', 
        '2' => 'Февраль',
        '3' => 'Март',
        '4' => 'Апрель',
        '5' => 'Май', 
        '6' => 'Июнь', 
        '7' => 'Июль',
        '8' => 'Август',
        '9' => 'Сентябрь',
        '10' => 'Октябрь',
        '11' => 'Ноябрь',
        '12' => 'Декабрь',
    ])?>
    <?= $form->field($model, 'favoritecuisine') -> dropdownlist ([ 
        '1' => '2022', 
        '2' => '2023',
        '3' => '2024',
        '4' => '2025',
        '5' => '2026', 
        '6' => '2027', 
    ])?>
 
    <div class="form-group">
        <?= Html::submitButton('Отправить', ['class' => 'btn btn-success']) ?>
    </div>
<?php ActiveForm::end(); 
?>
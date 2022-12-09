<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;


$this->title = 'Лабораторная работа №1';
$this->params['breadcrumbs'][] = $this->title;
?>
<?php $form = ActiveForm::begin(); ?>

    <h1><?= Html::encode('Отзыв о ресторане') ?></h1>

    <?= $form->field($model, 'name')->label('Ваше имя:')  ->textinput(['autofocus'=>true]) ?>
    <?= $form->field($model, 'email')->label('Ваш email:') ?>
    <?= $form->field($model, 'age')->label('Ваш возраст:')->hint('Возраст может быть от 18 до 100')?>
    <?= $form->field($model, 'dateofvisit')->label('Дата посещения:') -> textinput(['type'=>'date']) ?>
    <?= $form->field($model, 'favoritecuisine')->label('Любимая кухня:') -> dropdownlist ([ '1' => 'Русская', '2' => 'Мексиканская','3' => 'Итальянская','4' => 'Американская','5' => 'Грузинская', ])?>
    <?= $form->field($model, 'recommendation')->label('Порекомендуете нас друзьям?') ->radiolist([ '1' => 'Да', '0' => 'Нет']) ?>
    <?= $form->field($model, 'review')->label('Текст отзыва:') -> textarea(['rows'=>3])?>
    <?= $form->field($model, 'temp')->label('Ваша оценка:')->hint('Оценка должна быть от 1 до 5')?>
    
    <div class="form-group">
        <?= Html::submitButton('Отправить', ['class' => 'btn btn-primary']) ?>
    </div>
<?php ActiveForm::end(); 
?>

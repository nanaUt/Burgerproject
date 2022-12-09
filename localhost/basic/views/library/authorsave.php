<?php
use yii\helpers\Html;
use yii\bootstrap4\LinkPager;
use yii\widgets\ActiveForm;
$this->title = 'Форма 1';
$this->params['breadcrumbs'][] = $this->title;
?>
<h1 align="center">Добавление автора</h1>
<?php $form = ActiveForm::begin(); ?>
    <?= $form->field($model, 'surname')    ->label('Фамилия')          ->textinput(['autofocus'=>true]) ?>
    <?= $form->field($model, 'name')->label('Имя')  ->textinput(['type'=>'text']) ?>

    <div class="form-group">
        <?= Html::submitButton('Добавить', ['class' => 'btn btn-primary']) ?>
    </div>
<?php ActiveForm::end(); ?>

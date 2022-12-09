<?php
use yii\helpers\Html;
use yii\bootstrap4\LinkPager;
use yii\widgets\ActiveForm;
$this->title = 'Форма 2';
$this->params['breadcrumbs'][] = $this->title;
?>
<h1 align="center">Удаление автора</h1>
<?php $form = ActiveForm::begin(); ?>
    <?= $form->field($model, 'id')  ->label('Введите id автора:')  ->textinput(['autofocus'=>true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Удалить', ['class' => 'btn btn-primary']) ?>
    </div>
<?php ActiveForm::end(); ?>
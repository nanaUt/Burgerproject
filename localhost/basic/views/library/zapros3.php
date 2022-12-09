<?php
use yii\helpers\Html;
use yii\bootstrap4\LinkPager;
use yii\widgets\ActiveForm;
$this->title = 'Запрос 3';
$this->params['breadcrumbs'][] = $this->title;
?>

<h1 align="center">Поиск книги по ключевому слову</h1>

<?php $form = ActiveForm::begin(); ?>
    <?= $form->field($model, 'ftitle')->label('Название книги') ?>
    <h1 align="center"><?= Html::submitButton('Поиск', ['class' => 'btn btn-primary']) ?></h1>

<?php ActiveForm::end(); ?>

<ul>
  <table class="lux">
    <tr>
      <td><h5>Id</h5></td>
      <td><h5>Название</h5></td>
      <td><h5>Автор</h5></td> 
      <td><h5>Жанр</h5></td>       
      <td><h5>Год написания</h5></td>
    </tr>

    <?php foreach ($zapros3 as $book): ?>
      <tr>
        <td><h6><?= Html::encode("{$book->id}") ?></h6></td>
        <td><?= Html::encode("{$book->title}") ?></td>
        <td><?= Html::encode("{$book->author->surname}") ?></td>
        <td><?= Html::encode("{$book->genre->gen_name}") ?></td>
        <td><?= Html::encode("{$book->written}") ?></td>
      </tr>
    <?php endforeach; ?>
  </table>
  <?= LinkPager::widget(['pagination' => $pagination]) ?> 
</ul>

<style>

table {
    width: 60%; 
    border-collapse: collapse; /* Убираем двойные линии */
   }
   th {
    background: #E8E8E8; /* Цвет фона заголовка */
   }
   td, th {
    padding: 5px; /* Поля в ячейках */
    border: 1px solid #333; /* Параметры рамки */
   }
   }
</style>

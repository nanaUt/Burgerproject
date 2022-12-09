<?php
use yii\helpers\Html;
use yii\bootstrap4\LinkPager;
$this->title = 'Запрос 2';
$this->params['breadcrumbs'][] = $this->title;
?>
<h1>Авторы и количество написанных ими книг</h1>
<ul>
   <table class = "lux">
   <tr>
   <th>id</th>
   <th>Фамилия</th>
   <th>Имя</th>
   <th>Общее количество книг</th>
   </tr>
<?php foreach ($zapros2 as $book): ?>
    <tr>
    <td><h6><?= Html::encode("{$book->author_id}") ?></h6></td>
    <td><?= Html::encode("{$book->author->surname}") ?></td>
    <td><?= Html::encode("{$book->author->name}") ?></td>
    <td><?= Html::encode("{$book->author->name}") ?></td>
  </tr>
<?php endforeach; ?> 
</table>
</ul>
<?= LinkPager::widget(['pagination' => $pagination]) ?>

<style>

table {
    width: 60%; /* Ширина таблицы */
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
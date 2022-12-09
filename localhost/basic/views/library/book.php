<?php
use yii\helpers\Html;
use yii\bootstrap4\LinkPager;
$this->title = 'Книги';
$this->params['breadcrumbs'][] = $this->title;
?>
<h1>Books</h1>
<ul>
   <table class = "lux">
   <tr>
   <th>id</th>
   <th>Название</th>
   <th>Автор</th>
   <th>Жанр</th>
   <th>Год написания</th>
   </tr>
<?php foreach ($books as $book): ?>
    <tr>
    <td><h6><?= Html::encode("{$book->id}") ?></h6></td>
    <td><?= Html::encode("{$book->title}") ?></td>
    <td><?= Html::encode("{$book->author->surname}") ?></td>
    <td><?= Html::encode("{$book->genre->gen_name}") ?></td>
    <td><?= Html::encode("{$book->written}") ?></td>
  </tr>
<?php endforeach; ?> 
</table>
</ul>
<?= LinkPager::widget(['pagination' => $pagination]) ?>

<style>

table {
    width: 60%; 
    border-collapse: collapse; /* Убираем двойные линии */
   }
   th {
    background: #E8E8E8; 
   }
   td, th {
    padding: 5px; /* Поля в ячейках */
    border: 1px solid #333; /* Параметры рамки */
   }
   }
</style>
<?php
use yii\helpers\Html;
use yii\bootstrap4\LinkPager;
$this->title = 'Жанры книг';
$this->params['breadcrumbs'][] = $this->title;
?>
<h1>Жанры</h1>
<ul>
   <table class = "lux">
   <tr>
   <th>id</th>
   <th>Название жанра</th>
   </tr>
<?php foreach ($genres as $genre): ?>
    <tr>
    <td><h6><?= Html::encode("{$genre->id}") ?></h6></td>
    <td><?= Html::encode("{$genre->gen_name}") ?></td>
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
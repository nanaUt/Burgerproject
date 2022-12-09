<?php
use yii\helpers\Html;
use yii\bootstrap4\LinkPager;

$this->title = 'Авторы';
$this->params['breadcrumbs'][] = $this->title;
?>
<h1>Authors</h1>
<ul>
   <table class = "lux">
   <tr>
   <th>id</th>
   <th>Фамилия</th>
   <th>Имя</th>
   </tr>
<?php foreach ($authors as $author): ?>
    <tr>
    <td><h6><?= Html::encode("{$author->id}") ?></h6></td>
    <td><?= Html::encode("{$author->surname}") ?></td>
    <td><?= Html::encode("{$author->name}") ?></td>
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
<?php
use yii\helpers\Html;

$this->title = 'Лабораторная работа №1';
$this->params['breadcrumbs'][] = $this->title;

?>

<h1><?= Html::encode('Переданный отзыв:') ?></h1>

</ul>
<table border="1">
<tr>
<td><label>Ваше имя:</label></td>
<th><?= Html::encode($model->name) ?></th>
</tr>
<tr>
<td><label>Ваш email:</label></td>
<th><?= Html::encode($model->email) ?></th>
</tr>
<tr>
<td><label>Ваш возраст:</label></td>
<th><?= Html::encode($model->age) ?></th>
</tr>
<tr>
<td><label>Дата посещения:</label></td>
<th><?= Html::encode($model->dateofvisit) ?></th>
</tr>
<tr>
<td><label>Любимая кухня:</label></td>
<th><?= Html::encode($model->favoritecuisine) ?></th>
</tr>
<tr>
<td><label>Порекомендуете нас друзьям?</label></td>
<th><?= Html::encode($model->recommendation) ?></th>
</tr>
<tr>
<td><label>Текст отзыва:</label></td>
<th><?= Html::encode($model->review) ?></th>
</tr>
<tr>
<td><label>Ваш оценка:</label></td>
<th><?= Html::encode($model->temp) ?></th>
</tr>
</table>

</ul>

<style>

table {
  border: 2px solid #808080;
  margin-top: 3%;
}
th {
  font-weight: normal;
  color: #000000;
  padding: 5px;
}

td {
  color: #000000;
  padding: 5px;
  font-weight: bold;
}
</style>
<?php
use yii\helpers\Html;
$this->title = 'Лабораторная работа 3';
$this->params['breadcrumbs'][] = $this->title;

?>
<?= Html::encode($message) ?>
<ul>
	<li>1 задание:
		<ul>
			<li><a href="index.php?r=gii">gii</a></li>
			<li><a href="index.php?r=admin">Вход в админку</a></li>
		</ul>
	</li>
	<li>2 задание:
		<ul>
			<li><a href="index.php?r=admin/author">Авторы</a></li>
			<li><a href="index.php?r=admin/books">Книги</a></li>
			<li><a href="index.php?r=admin/genres">Жанры</a></li>
		</ul>
	</li>
</ul>
<?php
use yii\helpers\Html;
$this->title = 'Индивидуальный проект';
?>

<h1><center><b>ИНФОРМАЦИОННАЯ СИСТЕМА "АПТЕКА"</b></center></h1>
<ul class="border">
	<li><a href="index.php?r=gii"><h4>Gii</h4></a></li>
	<li><a href="index.php?r=adminn"><h4>Административная часть</h4></a></li>
	<li><h4>Таблицы</h4>
		<ul>
			<li><a href="index.php?r=burgerAdmin/customers">Покупатели</a></li>
			<li><a href="index.php?r=adminn/staff">Сотрудники</a></li>
			<li><a href="index.php?r=adminn/positions">Должности</a></li>
			<li><a href="index.php?r=adminn/medicaments">Медикаменты</a></li>
			<li><a href="index.php?r=adminn/type">Категории лекарств</a></li>
			<li><a href="index.php?r=adminn/releaseform">Формы лекарств</a></li>
			<li><a href="index.php?r=adminn/orders">Заказы</a></li>
			<li><a href="index.php?r=adminn/manufacturer">Производители</a></li>
			<li><a href="index.php?r=adminn/income">Поставки</a></li>
		</ul>
	</li>
</ul>

<style>

.border {
	list-style: none;
	padding: 0;
}
.border li {
	backdrop-filter: blur(5px);
	font-family: "Trebuchet MS", "Lucida Sans";
	padding: 7px 20px;
	margin-bottom: 10px;
	border-radius: 5px;
	border-left: 10px solid #f05d22; 
	box-shadow: 2px -2px 5px 0 rgba(0,0,0,.1),
		 -2px -2px 5px 0 rgba(0,0,0,.1),
		2px 2px 5px 0 rgba(0,0,0,.1),
		-2px 2px 5px 0 rgba(0,0,0,.1);
	font-size: 20px;
	letter-spacing: 2px;
	transition: 0.3s all linear;
}
body{
	background: url(https://i.pinimg.com/originals/81/93/00/81930030ee1253a195d4a873d550ed7e.png)
}
.border li:nth-child(2){border-color: #8bc63e;}
.border li:nth-child(3){border-color: #fcba30;}
.border li:nth-child(4){border-color: #1ccfc9;}
.border li:nth-child(5){border-color: #493224;}
.border li:hover {border-left: 10px solid transparent;}
.border li:nth-child(1):hover {border-right: 10px solid #f05d22;}
.border li:nth-child(2):hover {border-right: 10px solid #8bc63e;}
.border li:nth-child(3):hover {border-right: 10px solid #fcba30;}
.border li:nth-child(4):hover {border-right: 10px solid #1ccfc9;}
.border li:nth-child(5):hover {border-right: 10px solid #493224;}

h1{
	color: #002538;
}

</style>
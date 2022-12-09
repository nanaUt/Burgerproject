<?php

use yii\bootstrap4\Html;
use yii\bootstrap4\ActiveForm;

?>

<div class="admin-default-index">
    
	<div class="text-center my-4"> 
		<a href="http://localhost/basic/web/index.php?r=admin/categories" class="btn btn-warning">Категории</a> 
	</div>
	
	<div class="text-center my-4"> 
		<a href="http://localhost/basic/web/index.php?r=admin/customers" class="btn btn-warning">Заказчики</a> 
	</div> 

	<div class="text-center my-4"> 
		<a href="http://localhost/basic/web/index.php?r=admin/orders" class="btn btn-warning">Информация о заказе</a> 
	</div>

	<div class="text-center my-4"> 
		<a href="http://localhost/basic/web/index.php?r=admin/ordersproducts" class="btn btn-warning">Информация о заказанных позициях</a> 
	</div>

	<div class="text-center my-4"> 
		<a href="http://localhost/basic/web/index.php?r=admin/products" class="btn btn-warning">Позиции из меню</a> 
	</div>

	<div class="text-center my-4"> 
		<a href="http://localhost/basic/web/index.php?r=admin/default/index" class="btn btn-warning">Вернуться назад</a> 
	</div>

</div>

<style>
		.btn{
			font-size: 1rem;
			font-weight: 600;
			padding: 5px 50px 5px 50px}.box /*кнопка*/

		.btn{
			font-size: 1.5rem}@media (max-width: 10255px){.btn{padding: 5px 40px 5px 40px}}

		
		@media (max-width: 250px){.btn{padding: 5px 30px 5px 30px}}
		.btn-warning{
			background: none #f7810a;
			color: #ffffff;
			fill: #ffffff;
			border: none;
			text-decoration: none;
			outline: 0;
			box-shadow: -1px 6px 19px rgba(247, 129, 10, 0.25);
			border-radius: 100px
		} /*кнопка*/

		.btn-warning:hover
		{
			background: none #ff962b;
			color: #ffffff;
			box-shadow: -1px 6px 13px rgba(255, 150, 43, 0.35)
		} /*цвет наведения на кнопку*/

</style>
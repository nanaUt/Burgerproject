<?php

use yii\bootstrap4\Html;
use yii\bootstrap4\ActiveForm;

?>

<div class="admin-default-index">
    
	<div class="text-center my-4"> 
		<a href="http://localhost/basic/web/index.php?r=admin/default/base" class="btn btn-warning">Работа с базой данных</a> 
	</div>
	
	<div class="text-center my-4"> 
		<a href="http://localhost/basic/web/index.php?r=admin/courier" class="btn btn-warning">Выдача чека курьерам</a> 
	</div> 
</div>

<style>
	.btn{
			font-size: 1rem;
			font-weight: 600;
			padding: 5px 50px 5px 50px}.box /*кнопка*/

		.btn{
			font-size: 1.5rem}@media (max-width: 1025px){.btn{padding: 5px 40px 5px 40px}}
		
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


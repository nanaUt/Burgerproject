<?php

use yii\bootstrap4\ActiveForm;
use yii\bootstrap4\Html;

?>

<ul class="main-menu">
    <li><a href="http://localhost/basic/web/index.php?r=site%2Fmenu#url">Популярное</a></li>
    <li class="menu-children">
        <a href="#">Бургеры</a>
        <ul>
            <li><a href="http://localhost/basic/web/index.php?r=site/menuburggov">С говядиной</a></li>
            <li><a href="http://localhost/basic/web/index.php?r=site/menuburgkur">С курицей</a></li>          
        </ul>
    </li>
    <li><a href="http://localhost/basic/web/index.php?r=site/menusalat">Салаты</a></li>
    <li><a href="http://localhost/basic/web/index.php?r=site/menudesert">Десерты</a></li>
    <li><a href="http://localhost/basic/web/index.php?r=site/menuzakus">Закуски</a></li> 
	<li><a href="http://localhost/basic/web/index.php?r=site/menudrink">Напитки</a></li> 
	<li class="active"><a href="http://localhost/basic/web/index.php?r=site/menusouce">Соусы</a></li> 
</ul>

	
		<div class="row g-3"> 
			<div class="col-sm-4"> 
				<div class="card h-100 shadow-sm"> 
					<img src="images/Cheeseburger.png" class="card-img-top" alt="...">  
							<div class="card-body"> 
						<div class="text-center my-4">
							<h5 class="card-title">Чизбургер</h5> 
						</div>
						<div class="text-center my-4">
						<div class="clearfix mb-3"> 
									<span class="float-start badge rounded-pill bg-success">59 рублей</span> 
						</div>
						</div>
			</div> 
		</div> 
</div>

			  <div class="col-sm-4"> 
				<div class="card h-100 shadow-sm"> 
					<img src="images/FriedP.jpg" class="card-img-top" alt="..."> 
							<div class="card-body"> 
								<div class="text-center my-4">
							<h5 class="card-title">Картофель фри</h5> 
						</div>
						<div class="text-center my-4">
						<div class="clearfix mb-3"> 
									<span class="float-start badge rounded-pill bg-success">99 рублей</span> 
						</div>
						</div>  
		</div>
			</div>
				</div> 

				<div class="col-sm-4"> 
				<div class="card h-100 shadow-sm"> 
					<img src="images/cheesepalochki.png" class="card-img-top" alt="..."> 
							<div class="card-body"> 
								<div class="text-center my-4">
							<h5 class="card-title">Сырные палочки (3 шт.)</h5> 
						</div>
						<div class="text-center my-4">
						<div class="clearfix mb-3"> 
									<span class="float-start badge rounded-pill bg-success">99 рублей</span> 
						</div>
						</div>
			</div> 
		</div> 
	</div>

	<div class="container-fluid bg-trasparent my-4 p-3"> 
		<div class="row g-3"> 
			<div class="col-sm-4"> 
				<div class="card h-100 shadow-sm"> 
					<img src="images/Cezar.jpg" class="card-img-top" alt="..."> 
							<div class="card-body"> 
								<div class="text-center my-4">
							<h5 class="card-title">Цезарь</h5> 
						</div>
						<div class="text-center my-4">
						<div class="clearfix mb-3"> 
									<span class="float-start badge rounded-pill bg-success">179 рублей</span> 
						</div>
						</div> 
			</div> 
		</div> 
	</div>

			  <div class="col-sm-4"> 
				<div class="card h-100 shadow-sm"> 
					<img src="images/cheesecake.jpg" class="card-img-top" alt="..."> 
							<div class="card-body"> 
								<div class="text-center my-4">
							<h5 class="card-title">Клубничный чизкейк</h5> 
						</div>
						<div class="text-center my-4">
						<div class="clearfix mb-3"> 
									<span class="float-start badge rounded-pill bg-success">175 рублей</span> 
						</div>
						</div>
		</div>
			</div>
				</div>  
		</div> 
	</div>
</div>

	


<style>
	@import url('https://fonts.googleapis.com/css2?family=Fira+Sans+Extra+Condensed:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
	@import url('https://fonts.googleapis.com/css2?family=Heebo:wght@100;200;300;400;500;600;700;800;900&display=swap');
	@import url('https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap');

	:root{--font1: 'Heebo', sans-serif;--font2: 'Fira Sans Extra Condensed', sans-serif;--font3: 'Roboto', sans-serif}

	body{
		font-family: var(--font2);
		background-image: linear-gradient(120deg, #fdfbfb 50%, #fafafa 100%)
		}

	.card{
		background: #fff;
		box-shadow: 0 6px 10px rgba(0, 0, 0, .08), 0 0 6px rgba(0, 0, 0, .05);
		transition: .3s transform cubic-bezier(.155, 1.105, .295, 1.12), .3s box-shadow, .3s -webkit-transform cubic-bezier(.155, 1.105, .295, 1.12); /*гладкость наведения*/
		border: 0;
		border-radius: 1rem}
		
	.card-img, 
	.card-img-top
		{
		border-top-left-radius: 
		calc(1rem - 1px);
		border-top-right-radius: calc(1rem - 1px)}.card 
	
		h5{
			overflow: hidden;
			height: 50px;
			font-weight: 900;
			font-size: 1.5rem
		}
		
		.card-img-top{
			width: 100%;
			max-height: 180px;
			object-fit: contain;
			padding: 30px
		}.card

		h2{
			font-size: 1rem
		} /*необходимо для работы движения*/

		.card:hover{transform: scale(1.05); /*увеличение движения*/
		box-shadow: 0 10px 20px rgba(0, 0, 0, .12), 0 4px 8px rgba(0, 0, 0, .06)
		} /*необходимо для работы движения*/

		.label-top{
			position: absolute;
			background-color: #8bc34a; 
			color: #fff; /*цвет лейбла сверху*/
			top: 8px;
			right: 8px;
			padding: 5px 10px 5px 10px;
			font-size: .7rem;
			font-weight: 600;
			border-radius: 3px;
			text-transform: uppercase
		}
					
		.btn{
			font-size: 1rem;
			font-weight: 500;
			text-transform: uppercase;
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

		.bg-success{
			font-size: 1rem;
			background-color: #FFCF77 !important
		}
		
		.bg-danger{
			font-size: 1rem
		}
		
		.box{
			border-radius: 1rem;
			background: #fff;
			box-shadow: 0 6px 10px rgb(0 0 0 / 8%), 0 0 6px rgb(0 0 0 / 5%);
			transition: .3s transform cubic-bezier(.155, 1.105, .295, 1.12), .3s box-shadow,.3s -webkit-transform cubic-bezier(.155, 1.105, .295, 1.12)
		}
		
		.box-img{
			max-width: 300px
		}

		/*.thumb-sec{max-width: 300px}@media (max-width: 576px){.box-img{max-width: 200px}.thumb-sec{max-width: 200px}}*/

		/*.inner-gallery{
		width: 60px;
		height: 60px;
		border: 1px solid #ddd;
		border-radius: 3px;
		margin: 1px;
		display: inline-block;
		overflow: hidden;
		-o-object-fit: cover;
		object-fit: cover}@media (max-width: 370px){.box .btn{padding: 5px 40px 5px 40px;font-size: 1rem}}.disclaimer{font-size: .9rem;color: darkgray}*/

		/*.custom-btn {
		  width: 130px;
		  height: 40px;
		  color: #fff;
		  border-radius: 5px;
		  padding: 10px 25px;
		  font-family: 'Lato', sans-serif;
		  font-weight: 500;
		  background: transparent;
		  cursor: pointer;
		  transition: all 0.3s ease;
		  position: relative;
		  display: inline-block;
		   box-shadow:inset 2px 2px 2px 0px rgba(255,255,255,.5),
		   7px 7px 20px 0px rgba(0,0,0,.1),
		   4px 4px 5px 0px rgba(0,0,0,.1);
		  outline: none;
		}*/
	
	.main-menu {
    margin: 30;
    padding: 0;
    margin-top: 30px;
    font-family: var(--font2); 
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    
}
.main-menu > li {
    display: inline-flex;
}
.main-menu > li + li {
    margin-left: 35px;
}
.main-menu > li > a {
    padding: 0 0 20px 0;
    position: relative;
    text-transform: uppercase;   
    color: #000;
    font-weight: bold;
    font-size: 17px;
    text-decoration: none;   
}

.main-menu > li > a:after {
    width: 0;
    height: 3px;
    background-color: #FF6600;
    content: '';
    left: 0;
    bottom: 10px;
    position: absolute;
    transition: all .3s;
}
.main-menu > li > a:hover::after {
    width: 100%;
}
.main-menu > li.active a:after {
    width: 100%;
}
.main-menu li {
    margin: 0;
    white-space: nowrap;
}
.main-menu li.menu-children {
    position: relative;
    margin-right: 12px;
}
.main-menu li.menu-children:after {
    position: absolute;
    content: "\2039";
    color: #FF6600;
    font-size: 20px;
    font-weight: bold;
    right: -12px;
    top: -2px;
    transform: rotate(-90deg);
}
.main-menu li li.menu-children:after {
    position: absolute;
    content: "\2039";
    color: #FFF;
    font-size: 20px;
    font-weight: bold;
    right: 10px;
    top: 12px;
    transform: rotate(180deg);
}
.main-menu li.menu-children:hover > ul {
    opacity: 1;
    visibility: visible;
    transform: translateY(0);
}
.main-menu ul {
    padding: 10px 0;
    margin: 0;
    list-style: none;
    background-color: #faf6f2;
    position: absolute;
    z-index: 20;
    min-width: 220px;
    top: 100%;
    left: -30px;
    opacity: 0;
    visibility: hidden;
    transform: translateY(5px);
    transition: all 200ms cubic-bezier(0.43, 0.59, 0.16, 1.25);
}
.main-menu ul li {
    display: block;
    padding: 0 10px;
    line-height: 1.1;
}
.main-menu ul li:last-child {
    margin-bottom: 0;
}
.main-menu ul li a {
    display: block;
    color: #000000;
	text-transform: uppercase;
	font-weight: bold;
    padding: 10px;
    transition: all .3s;
    text-decoration: none;   
}
.main-menu ul li a:hover {
    color: #000000;
    background: #FFF;
    text-decoration: none;   
}
.main-menu ul ul {
    top: 0;
    left: 100%;
}
</style>
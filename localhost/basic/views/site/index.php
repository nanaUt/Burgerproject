<?php

/** @var yii\web\View $this */

$this->title = 'Burgerная';
?>
  
<body>
<div class="site-index">

    <div class="body-content">

        <div class="row">
            <div class="col">
                <p><b><h1 class="display-4">Доставка <br> фастфуда</h1></b>
            </p>
            <p><a class="btn btn-lg btn-success" href="http://localhost/basic/web/index.php?r=burgeradmin%2Fcustomers%2Fcreate"><span class="u-icon"><svg class="u-svg-content" viewBox="0 0 513.64 513.64" x="0px" y="0px" style="width: 0.9em; height: 0.9em;"><path d="M499.66,376.96l-71.68-71.68c-25.6-25.6-69.12-15.359-79.36,17.92c-7.68,23.041-33.28,35.841-56.32,30.72 c-51.2-12.8-120.32-79.36-133.12-133.12c-7.68-23.041,7.68-48.641,30.72-56.32c33.28-10.24,43.52-53.76,17.92-79.36l-71.68-71.68 c-20.48-17.92-51.2-17.92-69.12,0l-48.64,48.64c-48.64,51.2,5.12,186.88,125.44,307.2c120.32,120.32,256,176.641,307.2,125.44 l48.64-48.64C517.581,425.6,517.581,394.88,499.66,376.96z"></path></svg><img></span>&nbsp;СДЕЛАТЬ ЗАКАЗ
            </a></p>

            </div>
            <div class="col">
                <img class="u-image" src="images/burger.png" align="right">
            </div>
        </div>

    </div>
</div>
</body>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Heebo:wght@100;200;300;400;500;600;700;800;900&display=swap');

    :root{--font1: 'Heebo', sans-serif;--font2: 'Fira Sans Extra Condensed Medium', sans-serif;--font3: 'Roboto', sans-serif}

    .site-index{
        /*background-image: linear-gradient(rgba(0,0,0,0.4),rgba(0,0,0,0.4)),url(fon.jpeg);*/
        /*background-image: linear-gradient(to right, #fd9400, #f9e79b);
        word-wrap: break-word;*/
        height: 600px;
        width: 1000px;
    }
    .display-4{
        /*font-family: Century Gothic;*/
        /*font-family: Calibri;*/
        /*font-family: Microsoft Sans Serif;*/
        color: black;
        position: relative;
        font-size: 7.55rem;
        font-weight: 350; /*550*/
        font-style:normal;
        margin-left: -70px;
        margin-top: 100px;
        text-align: center;
        
    }

    .u-image{
    object-fit: cover;
    display: block;
    vertical-align: middle;
    background-size: cover;
    background-position: 50% 50%;
    background-repeat: no-repeat;
    width: 190%;
    margin: -50px -350px 0 0;
    }
    
    .btn-lg{
        margin-left: 15px;
        margin-top: 60px;
        border-radius: 30px;
        font-size: 26px;
        text-align:center;
        width: 350px;
        background-color: #00b000;

        
    }

    body{
        background-image: linear-gradient(to right, #fd9400, #f9e79b);
        font-family: var(--font2);
    }

    *{
        margin: 0;
        padding: 0;
    }

</style>
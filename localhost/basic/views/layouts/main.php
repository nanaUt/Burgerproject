<?php

/** @var yii\web\View $this */
/** @var string $content */

use app\assets\AppAsset;
use app\widgets\Alert;
use yii\bootstrap4\Breadcrumbs;
use yii\bootstrap4\Html;
use yii\bootstrap4\Nav;
use yii\bootstrap4\NavBar;
use yii\modules\burgeradmin;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="h-100">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body class="d-flex flex-column h-100">
<?php $this->beginBody() ?>

<header class="header text-light">
    <div class="logo">
    <?php
    NavBar::begin(
        [
            'options' => [
                'class' => 'navbar navbar-expand-md navbar-dark'
            ],
            'brandLabel' => 'Bürgerная'
        ]);
    /*NavBar::begin([
        'brandLabel' => 'Главная страница', //Yii::$app->name,
        'brandUrl' => ['/site/index']],//Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar navbar-expand-md navbar-dark bg-dark fixed-top',
        ],
    ]);*/

    echo Nav::widget([
        'options' => ['class' => 'navbar-nav'],
        'items' => [
           /* ['label' => 'Главная страница', 'url' => ['/site/index']], */
            ['label' => 'Составить заказ', 'url' => ['burgeradmin/customers/create']],
            ['label' => 'Меню', 'url' => ['/site/menu']],
           /* ['label' => 'Laboratornie', 'items' => [
            ['label' => 'Информация', 'url' => ['/site/info']],
            ['label' => 'Лаб1', 'url' => ['/site/entry']],
            //['label' => 'Лаб2', 'url' => ['/site/say']],]],
            //['label' => 'Лаб3', 'url' => ['/site/lab']],
            ['label' => 'Индивидуальный проект', 'url' => ['/site/lab6']],*/ 
            
            Yii::$app->user->isGuest ? (
                ['label' => 'Войти как менеджер', 'url' => ['site/login']]
            ) : (
                '<li>'
                . Html::beginForm(['/site/logout'], 'post', ['class' => 'form-inline'])
                . Html::submitButton(
                    'Logout (' . Yii::$app->user->identity->username . ')',
                    ['class' => 'btn btn-link logout']
                )
                . Html::endForm()
                . '</li>'
            )
        ],
    ]);

    NavBar::end();
    ?>
    </div>
</header>

<main role="main" class="flex-shrink-0">
    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</main>

<footer class="footer mt-auto py-3 text-muted">
    <div class="container">
        <p class="float-left">&copy; С любовью, Burgerная! <?= date('Y') ?></p>
        
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>

<style>
    @import url('https://fonts.googleapis.com/css2?family=Fira+Sans+Extra+Condensed:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
	@import url('https://fonts.googleapis.com/css2?family=Heebo:wght@100;200;300;400;500;600;700;800;900&display=swap');
	@import url('https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap');

	:root{--font1: 'Heebo', sans-serif;--font2: 'Fira Sans Extra Condensed', sans-serif;--font3: 'Roboto', sans-serif}

    body{
		font-family: var(--font2);
		}

    .footer{
        background-color: #434343;
    }
    .logo{
        background-color: #fd9400;
    }
    .header{
        background-color: #fd9400;
        height: 45px;
    }
    .nav{
        background-color: #fd9400;
        position: absolute; 
        right: 15px;
    }
    .bg-light {
        background-color: #fd9400 !important;
    }
    .navbar{

    }
}
</style>
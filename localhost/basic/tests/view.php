<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\modules\burgeradmin\models\Orders $model */

$this->title = 'ВАШ ЗАКАЗ';
//$this->params['breadcrumbs'][] = ['label' => 'Orders', 'url' => ['index']];

\yii\web\YiiAsset::register($this);
?>



<div class="orders-view">

    <h1><?= Html::encode($this->title) ?></h1>


    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'date'
        ],
    ]) ?>
    
    <p><a class="btn btn-lg btn-success" href="http://localhost/basic/web/index.php?r=site%2Fabout">Перейти к оплате</a></p>
</div>

</div>

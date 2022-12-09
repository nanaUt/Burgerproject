<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\modules\burgeradmin\models\Customers $model */


\yii\web\YiiAsset::register($this);
?>
<div class="customers-view">
<p class="text-success">Код отправлен на номер телефона</p>


    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Изменить', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Отменить', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'surname',
            'name',
            'email:email',
            'number',
            'adress',
        ],
    ]) ?>

<p><a class="btn btn-lg btn-success" href="http://localhost/basic/web/index.php?r=burgeradmin%2Forders%2Fcreate">Далее</a></p>
</div>


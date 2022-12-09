<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\modules\adminburger\models\Orprod $model */

$this->title = 'Create Orprod';
$this->params['breadcrumbs'][] = ['label' => 'Orprods', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="orprod-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

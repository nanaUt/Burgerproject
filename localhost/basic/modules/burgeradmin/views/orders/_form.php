<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use wbraganca\dynamicform\DynamicFormWidget;
use app\modules\burgeradmin\models\Products;
use app\modules\burgeradmin\models\Payments;

/** @var yii\web\View $this */
/** @var app\modules\burgeradmin\models\Orders $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="orders-form">

    <?php $form = ActiveForm::begin(['id' => 'dynamic-form']); ?>

    <?= $form->field($model, 'customer_id')->textInput() ?>

    <?= $form->field($model, 'date')->textInput(['readonly' => true, 'value' => date('Y-m-d H:i')]) ?> 

    <?= $form->field($model, 'payment')->textInput()->dropDownList(payments::find()->select(['payments','id'])->indexBy('id')->column()) ?>


    <div class="row">
        <div class="panel panel-default">
        <div class="panel-heading"><h4><i class="glyphicon glyphicon-envelope"></i>Добавьте продукты для заказа</h4></div>
        <div class="panel-body">
             <?php DynamicFormWidget::begin([
                'widgetContainer' => 'dynamicform_wrapper', // required: only alphanumeric characters plus "_" [A-Za-z0-9_]
                'widgetBody' => '.container-items', // required: css class selector
                'widgetItem' => '.item', // required: css class
                'limit' => 4, // the maximum times, an element can be cloned (default 999)
                'min' => 1, // 0 or 1 (default 1)
                'insertButton' => '.add-item', // css class
                'deleteButton' => '.remove-item', // css class
                'model' => $modelsOrprod[0],
                'formId' => 'dynamic-form',
                'formFields' => [
                    'products_id',
                    'quanity',
                ],
            ]); ?>

            <div class="container-items"><!-- widgetContainer -->
            <?php foreach ($modelsOrprod as $i => $modelOrprod): ?>
                <div class="item panel panel-default"><!-- widgetBody -->
                    <div class="panel-heading">
                        <h3 class="panel-title pull-left"></h3>
                        <div class="pull-right">
                            <button type="button" class="add-item btn btn-success btn-xs"><i class="glyphicon glyphicon-plus">+</i></button>
                            <button type="button" class="remove-item btn btn-danger btn-xs"><i class="glyphicon glyphicon-minus">-</i></button>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="panel-body">
                        <?php
                            // necessary for update action.
                            if (! $modelOrprod->isNewRecord) {
                                echo Html::activeHiddenInput($modelOrprod, "[{$i}]id");
                            }
                        ?>
                        <div class="row">
                            <div class="col-sm-7">
                                <?= $form->field($modelOrprod, "[{$i}]products_id")->textInput()->dropDownList(products::find()->select(["CONCAT(name, ' ', '|', ' ', price, ' ', 'рублей') AS name_price", 'id'])->indexBy('id')->column()) ?>
                            </div>
                            <div class="col-sm-2">
                                <?= $form->field($modelOrprod, "[{$i}]quanity")->textInput(['maxlength' => true]) ?>
                            </div>
                        </div><!-- .row -->
                    </div>
                </div>
            <?php endforeach; ?>
            </div>
            <?php DynamicFormWidget::end(); ?>

            <div class="form-group">
                <?= Html::submitButton('Подтвердить заказ', ['class' => 'btn btn-success']) ?>
            </div>
        </div>
    </div>


    <?php ActiveForm::end(); ?>

</div>

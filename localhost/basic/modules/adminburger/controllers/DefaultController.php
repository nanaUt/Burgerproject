<?php

namespace app\modules\adminburger\controllers;

use yii\web\Controller;

/**
 * Default controller for the `adminburger` module
 */
class DefaultController extends AppAdminController
{
    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }
}

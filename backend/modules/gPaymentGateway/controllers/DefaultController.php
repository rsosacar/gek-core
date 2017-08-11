<?php

namespace backend\modules\gPaymentGateway\controllers;

use yii\web\Controller;

/*use common\modules\wPayGateway\models\Types;
use common\vendor\web\Controller;*/
//use Yii;
//use yii\filters\AccessControl;

class DefaultController extends Controller
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
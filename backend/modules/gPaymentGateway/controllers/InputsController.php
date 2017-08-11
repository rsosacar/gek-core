<?php

namespace backend\modules\gPaymentGateway\controllers;

use Yii;
use yii\web\Controller;
/*use yii\web\NotFoundHttpException;
use common\modules\wPayGateway\models\Inputs;
use common\modules\wPayGateway\models\InputsLang;
use common\modules\wPayGateway\models\search\SearchInputs;
use common\vendor\web\Controller;*/


/**
 * Class InputsController
 * @package backend\modules\wPayGateway\controllers
 */
class InputsController extends Controller
{
    //public $modelClass = 'common\modules\wPayGateway\models\Inputs';
    /**
     * @param bool|false $return
     *
     * @return string|\yii\web\Response
     */
    /*public function actionCreate($return = null)
    {
        $input = new Inputs;


        if ($input->langModel->load(Yii::$app->request->post()))
        {
            $input->save();
	        $input->langModel->save();

            Yii::$app->activity->log(
                $this->module->name,
                $this->id,
                $this->action->id,
                $message = Yii::t($this->module->name, 'Ha creado el campo de configuración: '),
                $var = $input->langModel->name,
                $status = 'success',
                $contractId = Yii::$app->session->get('contractId'));

            if($return)
                    return $this->redirect(['index']);
                else
                    return $this->redirect(['update', 'id' => $input->id]);
        }

        return $this->render('//' . $this->module->name . '/inputs/create', [
            'input' => $input,
        ]);
    }*/

    /**
     * @param $id
     *
     * @return \yii\web\Response
     * @throws NotFoundHttpException
     */
    /*public function actionDelete($id)
    {
        $input = $this->findModel($id);

        Yii::$app->activity->log(
            $this->module->name,
            $this->id,
            $this->action->id,
            $message = Yii::t($this->module->name, 'Ha eliminado el campo de configuración: '),
            $var = $input->lang->name,
            $status = 'warning',
            $contractId = Yii::$app->session->get('contractId'));

        $input->delete();

        if(Yii::$app->request->isPjax)
            return $this->run('index');
        
        return $this->redirect(['index']);
    }*/

    /**
     * @return string
     */
    public function actionIndex()
    {
        //$searchModel = new SearchInputs;
        //$dataProvider = $searchModel->search(Yii::$app->request->getQueryParams());

        return $this->render('//'.$this->module->name.'/inputs/index'/*, [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider
        ]*/);
    }

    /**
     * @param $id
     * @param null $langId
     * @param null $return
     *
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException
     * @throws \yii\base\Exception
     */
    /*public function actionUpdate($id, $langId = null, $return = null)
    {
        if($langId == null)
            $langId = Yii::$app->languages->id;

        $input = $this->findModel($id);
        $lang = (InputsLang::find()->where(['inputId' => $id])->andWhere(['langId' => $langId])->one()
            ? InputsLang::find()->where(['inputId' => $id])->andWhere(['langId' => $langId])->one()
            : new InputsLang()
        );

        $lang->langId = $langId;

        if ($lang->load(Yii::$app->request->post()))
        {
            $input->save();
            $lang->inputId = $input->id;
            $lang->save();

            Yii::$app->activity->log(
                $this->module->name,
                $this->id,
                $this->action->id,
                $message = Yii::t($this->module->name, 'Ha actualizado el campo de configuración: '),
                $var = $lang->name,
                $status = 'info',
                $contractId = Yii::$app->session->get('contractId'));

            if($return)
                return $this->redirect(['index']);
        }

        return $this->render('//wPayGateway/inputs/update', [
            'input' => $input,
            'lang' => $lang,
        ]);
    }*/
}

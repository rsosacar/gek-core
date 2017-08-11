<?php

namespace backend\modules\wPayGateway\controllers;


use Yii;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use yii\data\ActiveDataProvider;
use common\vendor\web\Controller;
use common\modules\wPayGateway\models\Types;
use common\modules\wPayGateway\models\TypeInputs;
use common\modules\wPayGateway\models\Inputs;
use common\modules\wPayGateway\models\search\SearchTypes;


/**
 * Class TypesController
 * @package backend\modules\wPayGateway\controllers
 */
class TypesController extends Controller
{
    public $modelClass = 'common\modules\wPayGateway\models\Types';
    /**
     * @param $id
     *
     * @throws NotFoundHttpException
     */
    public function actionChangeStatus($id)
    {
        $model = $this->findModel($id);

        if($model->status == 1){
            $model->status = 0;
            $message = Yii::t($this->module->name, 'Ha desactivado el método de pago: ');
        } else {
            $model->status = 1;
            $message = Yii::t($this->module->name, 'Ha activado el método de pago: ');
        }

        if($model->save())
            Yii::$app->activity->log(
                $this->module->name,
                $this->id,
                $this->action->id,
                $message,
                $var = $model->name,
                $status = 'info',
                $contractId = Yii::$app->session->has('contractId'));
        else
            Yii::$app->activity->log(
                $this->module->name,
                $this->id,
                $this->action->id,
                $message = Yii::t($this->module->name, 'Error al intentar cambiar el estado de la noticia: '),
                $var = $model->name,
                $status = 'error',
                $contractId = Yii::$app->session->has('contractId'));
    }


    /**
     * @param bool|false $return
     *
     * @return string|\yii\web\Response
     * @throws \yii\base\Exception
     */
    public function actionCreate($return = null)
    {
        $type = new Types;

        //Se seleccionan los inputs disponibles
        $inputs = Inputs::find()->all();

        $inputTypes = Yii::$app->request->post('inputs');

        if($type->load(Yii::$app->request->post()) && $type->save()){
            if($inputTypes)
                $this->setTypeInputs($type->id, $inputTypes);

            Yii::$app->activity->log(
                $this->module->name,
                $this->id,
                $this->action->id,
                $message = Yii::t($this->module->name, 'Ha creado el método de pago: '),
                $var = $type->name,
                $status = 'success',
                $contractId = Yii::$app->session->get('contractId'));

            if($return)
                    return $this->redirect(['index']);
                else
                    return $this->redirect(['update', 'id' => $type->id]);
        }

        return $this->render('//' . $this->module->name . '/types/create', [
            'type'   => $type,
            'inputs' => $inputs,
        ]);
    }

    /**
     * @param $typeId
     * @param $inputs
     *
     * @throws \yii\base\Exception
     */
    public function setTypeInputs($typeId, $inputs)
    {
        foreach($inputs as $input) {

            $isNewInput = TypeInputs::find()
                ->where(['and', ['typeId' => $typeId], ['inputId' => $input]])
                ->one();

            if(!$isNewInput){
                $addInput = new TypeInputs();
                $addInput->typeId = $typeId;
                $addInput->inputId = $input;
                $addInput->save();
            }
        }
    }

    /**
     * @param $id
     *
     * @return \yii\web\Response
     * @throws NotFoundHttpException
     */
    public function actionDelete($id)
    {
        $type = $this->findModel($id);

        Yii::$app->activity->log(
            $this->module->name,
            $this->id,
            $this->action->id,
            $message = Yii::t($this->module->name, 'Ha eliminado el método de pago: '),
            $var = $type->name,
            $status = 'warning',
            $contractId = Yii::$app->session->get('contractId'));

        $type->delete();

        if(Yii::$app->request->isPjax)
            return $this->run('index');

        return $this->redirect(['index']);
    }

    /**
     * @param $id
     *
     * @throws \yii\base\Exception
     */
    public function actionDeleteInput($id)
    {
        $typeInput = TypeInputs::findOne($id);

        Yii::$app->activity->log(
            $this->module->name,
            $this->id,
            $this->action->id,
            $message = Yii::t($this->module->name, 'Se ha eliminado un campo de configuración del método de pago: '),
            $var = $typeInput->type->name . ' / Campo: ' . $typeInput->input->lang->name,
            $status = 'warning',
            $contractId = Yii::$app->session->has('contractId'));

        $typeId = $typeInput->typeId;

        $typeInput->delete();

        $this->redirect(['update', 'id' => $typeId]);
    }

    /**
     * Lists all Albums models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new SearchTypes;
        $dataProvider = $searchModel->search(Yii::$app->request->getQueryParams());

        return $this->render('//' . $this->module->id . '/types/index', [
            'searchModel'  => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Updates an existing Albums model.
     * If update is successful, the browser will be redirected to the 'view' page.
     *
     * @param string $id
     *
     * @return mixed
     */
    public function actionUpdate($id, $return = null)
    {
        $type = $this->findModel($id);

        $query = TypeInputs::find()->where(['typeId' => $id]);
        $typeInputs = new ActiveDataProvider([
            'query'      => $query,
            'pagination' => ['pageSize' => 20],
        ]);

        //Se seleccionan los inputs disponibles
        $inputs = Inputs::find()->all();

        if($type->load(Yii::$app->request->post()) and $type->save()){
            $inputTypes = Yii::$app->request->post('inputs');

            if($inputTypes)
                $this->setTypeInputs($type->id, $inputTypes);

            Yii::$app->activity->log(
                $this->module->name,
                $this->id,
                $this->action->id,
                $message = Yii::t($this->module->name, 'Ha actualizado el método de pago: '),
                $var = $type->name,
                $status = 'info',
                $contractId = Yii::$app->session->get('contractId'));

            if($return)
                    return $this->redirect(['index']);
        }

        return $this->render('//' . $this->module->id . '/types/update', [
            'type'       => $type,
            'typeInputs' => $typeInputs,
            'inputs'     => $inputs,
        ]);
    }

    /**
     * @param $id
     * @param $value
     *
     * @throws \yii\base\Exception
     */
    public function actionUpdateConfigValue()
    {
        $typeInput = TypeInputs::findOne(Yii::$app->request->post('id'));
        $typeInput->value = Yii::$app->request->post('value');
        $typeInput->save();
    }

    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'allow' => true,
                        'roles' => [
                            'Admin', 'MasterOperator', 'MasterManager', 'MasterClient', 'Clients', 'Operators', 'Users',
                        ],
                    ],
                ],
            ],
            'verbs'  => [
                'class'   => VerbFilter::className(),
                'actions' => [
                    'delete' => ['post'],
                ],
            ],
        ];
    }
}

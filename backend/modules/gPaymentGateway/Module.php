<?php
namespace backend\modules\gPaymentGateway;

use Yii;

class Module extends \yii\base\Module
{
    public function init(){
        $this->name = 'gPaymentGateway';

        parent::init();

        if(Yii::$app->user->can('Admin')){
            $this->menu = [
                ['name' => Yii::t($this->name, 'Campos de configuración'),'controller' => 'inputs', 'url' => $this->name . '/inputs']/*,
                ['name' => Yii::t($this->name, 'Métodos de pago'),'controller' => 'types', 'url' => $this->name . '/types']*/
            ];
        }
        /*else{
            $this->menu = [
                ['name' => Yii::t($this->name, 'Métodos de pago'),'controller' => 'types', 'url' => $this->name . '/types']
            ];
        }*/
    }
}
<?php

namespace app\modules\admin\controllers;

class MasterdataController extends \yii\web\Controller
{
	public $layout = 'main';
    public function actionIndex()
    {
        return $this->render('index');
    }
    
    public function actionSystembilling()
    {
    	return $this->render('billing');
    }
    
    public function actionSystempricing()
    {
    	return $this->render('pricing');
    }

}

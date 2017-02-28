<?php

namespace app\modules\admin\controllers;

class ClientusersController extends \yii\web\Controller
{
	public $layout = 'main';
    public function actionIndex()
    {
        return $this->render('index');
    }
    
    public function actionAddclientuser()
    {
    	return $this->render('addform');
    }
    
    public function actionEditclientuser()
    {
    	return $this->render('editform');
    }

    public function actionClientusersearchresults()
    {
    	return $this->render('searchresults');
    }
}

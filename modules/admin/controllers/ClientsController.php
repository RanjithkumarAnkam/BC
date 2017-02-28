<?php

namespace app\modules\admin\controllers;

class ClientsController extends \yii\web\Controller
{
	public $layout = 'main';
    public function actionIndex()
    {
        return $this->render('index');
    }
    
    public function actionAddclient()
    {
    	return $this->render('addform');
    }
    
    public function actionEditclient()
    {
    	return $this->render('editform');
    }
    
    public function actionClientsearchresults()
    {
    	return $this->render('searchresults');
    }

}

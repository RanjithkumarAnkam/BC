<?php

namespace app\modules\admin\controllers;

use yii\web\Controller;

class FirmController extends \yii\web\Controller
{
	public $layout = 'main';
    public function actionAddFirm()
    {
    	
        return $this->render('add-firm');
    }
    
    public function actionUpdateFirm()
    {
    	 
    	return $this->render('update-firm');
    }
    
    public function actionManageFirm()
    {
    
    	return $this->render('manage-firm');
    }
    
    public function actionFirmUser()
    {
    	 
    	return $this->render('firm-user');
    }
    public function actionUpdatefirmUser()
    {
    
    	return $this->render('firm-user');
    }
    public function actionManageFirmUser()
    {
    
    	return $this->render('manage-firm-user');
    }

}

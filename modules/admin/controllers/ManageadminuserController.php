<?php

namespace app\modules\admin\controllers;

class ManageadminuserController extends \yii\web\Controller
{
	public $layout = 'main';
    public function actionIndex()
    {
        return $this->render('index');
    }

}

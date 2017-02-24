<?php

namespace app\modules\admin\controllers;

use yii\web\Controller;

class DashboardController extends \yii\web\Controller
{
	public $layout = 'main';
    public function actionIndex()
    {
        return $this->render('index');
    }

}

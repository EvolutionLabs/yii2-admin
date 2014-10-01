<?php

namespace mdm\admin\items;

class DefaultController extends \yii\web\Controller
{

	public $layout = 'top-menu';

	public function actionIndex()
	{
		return $this->render('index');
	}

}

<?php

/**
 * 
 */
class AdminController extends CController
{
	public $layout = '//layouts/sb_admin';

    public function actionIndex()
    {
        $this->render('index');
    }

	public function filters()
	{
		// return the filter configuration for this controller, e.g.:
		return array(
			'accessControl',
			'postOnly + delete',
			array('ext.bootstrap.filters.BootstrapFilter') // 前台页面去掉bs2主题 - view
		);
	}

	// -----------------------------------------------------------
	// Uncomment the following methods and override them if needed
	/*
	public function actions()
	{
		// return external action classes, e.g.:
		return array(
			'action1'=>'path.to.ActionClass',
			'action2'=>array(
				'class'=>'path.to.AnotherActionClass',
				'propertyName'=>'propertyValue',
			),
		);
	}
	*/
}
<?php

class QuizController extends Controller
{
	/**
	* @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	* using two-column layout. See 'protected/views/layouts/column2.php'.
	*/
	public $layout='//layouts/sb_admin';

	/**
	* @return array action filters
	*/
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
			array('ext.bootstrap.filters.BootstrapFilter - index') // 前台页面去掉bs2主题 - view
		);
	}

	/**
	* Specifies the access control rules.
	* This method is used by the 'accessControl' filter.
	* @return array access control rules
	*/
	public function accessRules()
	{
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update','admin','delete','view'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array(),
				'users'=>array('admin'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

	/**
	* Displays a particular model.
	* @param integer $id the ID of the model to be displayed
	*/
	public function actionView($id)
	{
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}

	/**
	* Creates a new model.
	* If creation is successful, the browser will be redirected to the 'view' page.
	*/
	public function actionCreate()
	{
		$model = new Quiz;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Quiz']))
		{
			$model->attributes = $_POST['Quiz'];

			switch ($model->quiztype_id) {
				case '2':
					$model->quiz_answer = implode('', $_POST['targs']['questionanswer2']);
					break;
				case '3':
					$model->quiz_answer = $_POST['targs']['questionanswer3'];
					break;					
				default:
					$model->quiz_answer = $_POST['targs']['questionanswer1'];
					break;
			}

			$model->createtime = time();
			$model->user_userid = Yii::app()->user->getId();

			if($model->save())
				$this->redirect(array('view','id'=>$model->quizid));
		}

		$this->render('create',array(
			'model'=>$model,
		));
	}

	/**
	* Updates a particular model.
	* If update is successful, the browser will be redirected to the 'view' page.
	* @param integer $id the ID of the model to be updated
	*/
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);

	// Uncomment the following line if AJAX validation is needed
	// $this->performAjaxValidation($model);

		if(isset($_POST['Quiz']))
		{
			$model->attributes=$_POST['Quiz'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->quizid));
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}

	/**
	* Deletes a particular model.
	* If deletion is successful, the browser will be redirected to the 'admin' page.
	* @param integer $id the ID of the model to be deleted
	*/
	public function actionDelete($id)
	{
		if(Yii::app()->request->isPostRequest)
		{
			// we only allow deletion via POST request
			$this->loadModel($id)->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
		}
		else
			throw new CHttpException(400,'Invalid request. Please do not repeat this request again.');
	}

	/**
	* Lists all models.
	*/
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('Quiz');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	* Manages all models.
	*/
	public function actionAdmin()
	{
		$model=new Quiz('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Quiz']))
			$model->attributes=$_GET['Quiz'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	* Returns the data model based on the primary key given in the GET variable.
	* If the data model is not found, an HTTP exception will be raised.
	* @param integer the ID of the model to be loaded
	*/
	public function loadModel($id)
	{
		$model=Quiz::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	* Performs the AJAX validation.
	* @param CModel the model to be validated
	*/
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='quiz-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}

	public function getType()
	{
		$quiztype = Quiztype::model()->findAll();

		$data = array();
		foreach ($quiztype as $key => $value) {
			$data[$value->id] = $value->quiz_type;
		}

		return $data;
	}

	public function getAnswerNums()
	{
		return array('0'=>0, '2'=>2, '4'=>4, '5'=>5, '6'=>6);
	}

	public function getAnswerBox()
	{
		return array(
			'name' => 'answerbox',
			'data' => array(
				'1' => 'ABCDE',
				'2' => 'ABCDE',
				'3' => 'AB'
			)
		);
	}
}

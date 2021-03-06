<?php

class QuestionController extends Controller
{
	/**
	* @var string the default layout for the views. Defaults to '//layouts/sb_admin', meaning
	* using two-column layout. See 'protected/views/layouts/sb_admin.php'.
	*/
	public $layout='//layouts/column1';

	/**
	* @return array action filters
	*/
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
			'postOnly + delete',
			array('ext.bootstrap.filters.BootstrapFilter - create index view') // 前台页面去掉bs2主题 
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
			'actions'=>array('index','view','create'),
			'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
			'actions'=>array('update','admin','delete'),
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
		$this->layout = '//layouts/site_main';
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
		$model=new Question;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Question']))
		{
			$model->attributes=$_POST['Question'];
			$model->createtime = time();

			if($model->save())
				$this->redirect(array('view','id'=>$model->questionid));
		}

		$this->layout = '//layouts/site_main';
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

	if(isset($_POST['Question']))
	{
		$model->attributes=$_POST['Question'];
		$model->status = 1;
		$model->answertime = time();
		$model->user_userid = Yii::app()->user->getId();

		if($model->save())
			$this->redirect(array('question/admin'));
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
	public function actionIndex($keyword = '')
	{
		$criteria = new CDbCriteria;
		$criteria->order = 'createtime DESC, status DESC';

		if (!empty($keyword)) {
			$criteria->addSearchCondition('title', $keyword);
		}

		$count = Question::model()->count($criteria);
		$pages = new CPagination($count);

		$pages->pagesize = Page::SIZE;
		$pages->applyLimit($criteria);
		$data = Question::model()->findAll($criteria);

		$this->layout = '//layouts/site_main';
		$this->render('index',array(
			'data' => $data,
			'pages' => $pages,
			//'name' => $name,
		));
	}

	/**
	* Manages all models.
	*/
	public function actionAdmin()
	{
	$model=new Question('search');
	$model->unsetAttributes();  // clear any default values
	if(isset($_GET['Question']))
	$model->attributes=$_GET['Question'];

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
	$model=Question::model()->findByPk($id);
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
	if(isset($_POST['ajax']) && $_POST['ajax']==='question-form')
	{
	echo CActiveForm::validate($model);
	Yii::app()->end();
	}
	}
}

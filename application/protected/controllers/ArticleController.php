<?php

class ArticleController extends Controller
{
	/**
	* @var string the default layout for the views. Defaults to '//layouts/sb_admin', meaning
	* using two-column layout. See 'protected/views/layouts/sb_admin.php'.
	*/
	public $layout='//layouts/sb_admin';

	/**
	* @return array action filters
	*/
	public function filters()
	{
		return array(
			'accessControl',
			'postOnly + delete',
			array('ext.bootstrap.filters.BootstrapFilter - index view') // 前台页面去掉bs2主题 
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
				'actions'=>array(),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update','index','view','admin','delete'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete'),
				'users'=>array('admin'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

	/**
	* Lists all models.
	*/
	public function actionIndex($catid = 0, $keyword = '')
	{
		$catid = (int) $catid;

		$criteria = new CDbCriteria;
		array('order'=>'updatetime DESC');

		if ($keyword) {
			$criteria->addSearchCondition('title', $keyword);
			$catname = '站内搜索 —— ' . $keyword;
		} 

		if ($catid) {
			$criteria->condition = 'category_catid = :category_catid';
			$criteria->params = array(':category_catid' => $catid);

			$cat = Category::model()->find('catid = :catid', array(':catid'=>$catid));
			
			if (!isset($catname)) {
				$catname = $cat->catname;
			}
		} else {
			if (!isset($catname)) {
				$catname = '所有栏目';
			}
		}	
		


		$count = Article::model()->count($criteria);
		$pages = new CPagination($count);

		$pages->pagesize = Page::SIZE;
		$pages->applyLimit($criteria);
		$data = Article::model()->findAll($criteria);

		// recent hots
		$hots = Article::hots(5);


		$this->layout = '//layouts/site_main';

		$this->render('index',array(
			'data' => $data,
			'pages' => $pages,
			'catname' => $catname,
			'hots' => $hots
		));
	}

	/**
	* Displays a particular model.
	* @param integer $id the ID of the model to be displayed
	*/
	public function actionView($id)
	{
		if (isset($_POST) && !empty($_POST)) {
			$comment = new Comment;
			$comment->author_name = $_POST['guestname'];
			$comment->author_email = $_POST['guestemail'];
			$comment->author_ip = $_SERVER['REMOTE_ADDR'];
			$comment->comment_content = $_POST['comment'];
			$comment->article_id = $id;
			$comment->createtime = time();
			$comment->save();
		}

		$model = $this->loadModel($id);
		$cat = $model->category;

		// comment
		$criteria = new CDbCriteria;
		$criteria->condition = 'article_id = :article_id';
		$criteria->params = array(':article_id' => $id);
		$criteria->order = 'createtime DESC';

		$count = Comment::model()->count($criteria);
		$pages = new CPagination($count);

		$pages->pagesize = Page::SIZE;
		$pages->applyLimit($criteria);
		$comments = Comment::model()->findAll($criteria);

		// recent hots
		$hots = Article::hots(5);

		$this->layout = '//layouts/site_main';
		$this->render('view',array(
			'model' => $model,
			'cat' => $cat,
			'comments' => $comments,
			'pages' => $pages,
			'hots' => $hots
		));

		$model->hits += 1;
		$model->save();
	}

	/**
	* Creates a new model.
	* If creation is successful, the browser will be redirected to the 'view' page.
	*/
	public function actionCreate()
	{
		$model=new Article;


		$cat = Category::model()->getCategory();

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Article']))
		{
			$model->attributes=$_POST['Article'];
			$model->user_userid = Yii::app()->user->getId();
			if($model->save())
				$this->redirect(array('admin'));
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

		if(isset($_POST['Article']))
		{
			$model->attributes=$_POST['Article'];
			if($model->save())
				$this->redirect(array('admin'));
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
	* Manages all models.
	*/
	public function actionAdmin()
	{
		$model=new Article('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Article']))
			$model->attributes=$_GET['Article'];

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
		$model = Article::model()->findByPk($id);
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
		if(isset($_POST['ajax']) && $_POST['ajax']==='article-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}

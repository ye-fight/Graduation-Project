<?php

class SiteController extends Controller
{
	public $layout='//layouts/site_main';

	public function filters()
	{
		return array(
			'accessControl',
			'postOnly + delete',
			
		);
	}
	/**
	 * Declares class-based actions.
	 */
	public function actions()
	{
		return array(
			// captcha action renders the CAPTCHA image displayed on the contact page
			'captcha'=>array(
				'class'=>'CCaptchaAction',
				'backColor'=>0xFFFFFF,
			),
			// page action renders "static" pages stored under 'protected/views/site/pages'
			// They can be accessed via: index.php?r=site/page&view=FileName
			'page'=>array(
				'class'=>'CViewAction',
			),
		);
	}

	/**
	 * 首页
	 */
	public function actionIndex()
	{
		$this->render('index');
	}

	public function actionAnalyse()
	{
		$status = array();
		if (isset($_POST) && !empty($_POST)) {
			$x = floatval($_POST['hplasmaglucose']);
			$y = floatval($_POST['fpg']);
			$z = floatval($_POST['hba1c']);

			if ($x < 7.8 && $y < 6.1 && $z < 6.0) {
				$status['type'] = 1;
				$status['name'] = '正常';
				$status['message'] = '
					<p>防止和纠正肥胖</p><p>避免高脂肪饮食</p><p>饮食要保证合理体重及工作、生活的需要。食物成分合理，碳水化合物以非精制、富含可溶性维生素为好，占食物总热量的50%～65%，脂肪占食物总热量的15%～20%(多不饱和脂肪酸与饱和脂肪酸比例大于1.5)，蛋白质占食物总热量的10%～15%。多吃蔬菜。</p><p>增加体力活动，参加体育锻炼。</p><p>避免或少用对糖代谢不利的药物。</p><p>积极发现和治疗高血压、高血脂和冠心病。</p><p>戒除烟酒等不良习惯。</p>
				';
			} elseif ($x < 7.8 && $y >= 6.1 && $y < 7.0 && $z >= 6.0 && $z < 6.5) {
				$status['type'] = 2;
				$status['name'] = '空腹血糖受损';
				$status['message'] = '
					<p>空腹血糖受损也是从正常过渡到糖尿病的一个过渡阶段，在这阶段，患者如果注意饮食疗法和运动疗法（也许还可加一些口服降糖药）的话，血糖有可能逐渐变为正常。否则的话，也有可能发展成为糖尿病。</p>
					<p>糖耐量低减和空腹血糖受损者约有1/3在几年后发展成糖尿病，有1/3维持不变，另外1/3转为正常。因此，这些人也应该经常检查，并且积极预防。</p>
					<p>建议：在进食膳食纤维的同时也要注意维生素的摄入；控制总热量的摄入；防治并发症</p>
				';
			} elseif ($x >= 7.8 && $y < 7.0 && $z >= 6.0 && $z < 6.5) {
				$status['type'] = 3;
				$status['name'] = '糖耐量受损';
				$status['message'] = '
					<p>许多研究显示，给予2型糖尿病高危人群（IGT、IFG）适当干预可显著延迟或预防2型糖尿病的发生。中国大庆研究和美国预防糖尿病计划（DPP）研究生活方式干预组推荐患者摄入脂肪热量<25%的低脂饮食，如果体重减轻未达到标准，则进行热量限制；生活方式干预组中50%的患者体重减轻了7%，74%的患者可以坚持每周至少150min中等强度的运动；生活方式干预3年可使IGT进展为2型糖尿病的风险下降58%。此外，在其他种族糖耐量异常患者中开展的生活方式干预研究也证实了生活方式干预的有效性。</p>
					<p>应建议糖尿病前期患者通过饮食控制和运动来减少发生糖尿病的风险[3]，并定期随访以确保患者能坚持下来；定期检查血糖；同时密切关注心血管疾病危险因素（如吸烟、高血压和血脂紊乱等），并给予适当治疗。具体目标是:（1）使肥胖或超重者BMI达到或接近24kg/m2，或体重至少减少5%～10%;（2）至少减少每日饮食总热量400～500千卡;（3）饱和脂肪酸摄入占总脂肪酸摄入的30%以下;（4）体力活动增加到250～300min/周。</p>
				';
			} elseif ($x >= 11.1 || $y >= 7.0 && $z >= 6.5) {
				$status['type'] = 4;
				$status['name'] = '糖尿病';
				$status['message'] = '
					<p>目前尚无根治糖尿病的方法，但通过多种治疗手段可以控制好糖尿病。主要包括5个方面：糖尿病患者的教育，自我监测血糖，饮食治疗，运动治疗和药物治疗。</p><p>1．教育——糖尿病患者应懂得糖尿病的基本知识，树立战胜疾病的信心，如何控制糖尿病，控制好糖尿病对健康的益处。根据每个糖尿病患者的病情特点制定恰当的治疗方案。</p><p>2．自我监测血糖——随着小型快捷血糖测定仪的逐步普及，病人可以根据血糖水平随时调整降血糖药物的剂量。1型糖尿病进行强化治疗时每天至少监测4次血糖（餐前），血糖不稳定时要监测8次（三餐前、后、晚睡前和凌晨3：00）。强化治疗时空腹血糖应控制在7.2毫摩尔/升以下，餐后两小时血糖小于10mmol/L，HbA1c小于7%。2型糖尿病患者自我监测血糖的频度可适当减少。</p><p>3.运动治疗——增加体力活动可改善机体对胰岛素的敏感性，降低体重，减少身体脂肪量，增强体力，提高工作能力和生活质量。运动的强度和时间长短应根据病人的总体健康状况来定，找到适合病人的运动量和病人感兴趣的项目。运动形式可多样，如散步，快步走、健美操、跳舞、打太极拳、跑步、游泳等。</p><p>4.饮食治疗——饮食治疗是各种类型糖尿病治疗的基础，一部分轻型糖尿病患者单用饮食治疗就可控制病情。</p><p>5.药物治疗</p>
				';
			} else {
				$status['type'] = 0;
			}
		}

		$this->render('analyse', array('status'=>$status));
	}

	public function actionSelfTest()
	{
		if (isset($_POST) && !empty($_POST)) {
			$status = 1;
			$data = unserialize(base64_decode($_POST['data']));
			$answer = $_POST['question'];
		} else {
			$status = 0;
			$data = Quiz::getRand(3);
			$answer = array();
		}
		
		$this->render('test', array(
			'data' => $data,
			'answer' => $answer,
			'status' => $status
		));
	}

	/**
	 * 关于我们
	 */
	public function actionAbout()
	{
		$data = Category::model()->findByPk(6);

		$this->render('about', $data);
	}

	/**
	 * This is the action to handle external exceptions.
	 */
	public function actionError()
	{
		if($error=Yii::app()->errorHandler->error)
		{
			if(Yii::app()->request->isAjaxRequest)
				echo $error['message'];
			else
				$this->render('error', $error);
		}
	}

	/**
	 * Displays the contact page
	 */
	public function actionContact()
	{
		$model=new ContactForm;
		if(isset($_POST['ContactForm']))
		{
			$model->attributes=$_POST['ContactForm'];
			if($model->validate())
			{
				$name='=?UTF-8?B?'.base64_encode($model->name).'?=';
				$subject='=?UTF-8?B?'.base64_encode($model->subject).'?=';
				$headers="From: $name <{$model->email}>\r\n".
					"Reply-To: {$model->email}\r\n".
					"MIME-Version: 1.0\r\n".
					"Content-Type: text/plain; charset=UTF-8";

				mail(Yii::app()->params['adminEmail'],$subject,$model->body,$headers);
				Yii::app()->user->setFlash('contact','Thank you for contacting us. We will respond to you as soon as possible.');
				$this->refresh();
			}
		}
		$this->render('contact',array('model'=>$model));
	}

	/**
	 * Displays the login page
	 */
	public function actionLogin()
	{
		$model=new LoginForm;

		// if it is ajax validation request
		if(isset($_POST['ajax']) && $_POST['ajax']==='login-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}

		// collect user input data
		if(isset($_POST['LoginForm']))
		{
			$model->attributes=$_POST['LoginForm'];
			// validate user input and redirect to the previous page if valid
			if($model->validate() && $model->login())
				$this->redirect(array('admin/index'));
		}
		// display the login form
		$this->render('login',array('model'=>$model));
	}

	/**
	 * Logs out the current user and redirect to homepage.
	 */
	public function actionLogout()
	{
		Yii::app()->user->logout();
		$this->redirect(Yii::app()->homeUrl);
	}
}
<?php
/* @var $this SiteController */
/* @var $model LoginForm */
/* @var $form CActiveForm  */

$this->pageTitle=Yii::app()->name . ' - Login';
$this->breadcrumbs=array(
	'Login',
);
?>

<div class="container">
  <div class="row">
    <div class="col-lg-12">
      <h1 class="page-header">后台登陆</h1>
      <ol class="breadcrumb">
        <li><?php echo CHtml::link('首页', '/') ?></li>
        <li class="active">后台登陆</li>
      </ol>
    </div>
	</div>
	<div class="row">
		<div class="col-lg-6">
			<?php $form=$this->beginWidget('CActiveForm', array(
				'id'=>'login-form',
				'enableClientValidation'=>true,
				'clientOptions'=>array(
					'validateOnSubmit'=>true,
				),
			)); ?>
			  <div class="form-group">
					<?php echo $form->labelEx($model,'username'); ?>
					<?php echo $form->textField($model,'username', array(
						'class' => 'form-control', 'placeholder'=>'输入用户名')
					); ?>
					<?php echo $form->error($model,'username'); ?>
			  </div>
			  <div class="form-group">
					<?php echo $form->labelEx($model,'password'); ?>
					<?php echo $form->passwordField($model,'password', array(
						'class' => 'form-control', 'placeholder'=>'输入密码'
					)); ?>
					<?php echo $form->error($model,'password'); ?>			  
				</div>
			  <div class="checkbox">
				<?php echo $form->checkBox($model,'rememberMe'); ?>
				<?php echo $form->label($model,'rememberMe'); ?>
				<?php echo $form->error($model,'rememberMe'); ?>
			  </div>
			  <button type="submit" class="btn btn-default">登陆</button>
			<?php $this->endWidget(); ?>
		</div>
	</div>
</div>





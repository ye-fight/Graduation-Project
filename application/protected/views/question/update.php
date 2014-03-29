<?php
$this->breadcrumbs=array(
	'Questions'=>array('index'),
	$model->title=>array('view','id'=>$model->questionid),
	'Update',
);

	$this->menu=array(
	array('label'=>'List Question','url'=>array('index')),
	array('label'=>'Create Question','url'=>array('create')),
	array('label'=>'View Question','url'=>array('view','id'=>$model->questionid)),
	array('label'=>'Manage Question','url'=>array('admin')),
	);
	?>

	<h1>答疑详情</h1>

	<div class="question-box">
		<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
			'id'=>'question-form',
			'enableAjaxValidation'=>false,
		)); ?>   
		<h5 class="text-info">问题主题：</h5>
		<p><?php echo $model->title ?></p>
		<h5 class="text-info">问题描述：</h5>
		<p><?php echo $model->content ?></p>
		<h5 class="text-info">咨询日期</h5>
		<p><?php echo date('Y-m-d H:i', $model->createtime) ?></p>

		<?php if ($model->status) { ?>
        <h5 class="text-primary">回答日期</h5>
        <p><?php echo date('Y-m-d H:i', $model->answertime) ?></p>
		<?php } ?>

		<h5 class="text-info">医生答疑</h5>
		<?php $this->widget('application.extensions.tinymce.ETinyMce', array(
			'model' => $model,
			'attribute' => 'answer',
			'editorTemplate' => 'full',
			'htmlOptions' =>array('rows'=>6, 'cols'=>50, 'class'=>'span8'),
			'options' => array(
				'theme_advanced_buttons1' =>
				'undo,redo,|,bold,italic,underline,|,justifyleft,justifycenter,justifyright,justifyfull,|,outdent, indent,|,advhr,|,sub,sup,|,bullist,numlist,|,formatselect,fontselect,fontsizeselect,|,cut,copy,paste,pastetext,pasteword,|,search,replace,',
				'theme_advanced_buttons2' => 'tablecontrols,|,removeformat,visualaid,',
				'theme_advanced_buttons3' => '',
				'theme_advanced_buttons4' => '',
				'theme_advanced_toolbar_location' => 'top',
				'theme_advanced_toolbar_align' => 'left',
				'theme_advanced_statusbar_location' => 'none',
				'theme_advanced_font_sizes' => "10=10pt,11=11pt,12=12pt,13=13pt,14=14pt,
				15=15pt,16=16pt,17=17pt,18=18pt,19=19pt,20=20pt",
			)
		)); ?>
		<?php echo $form->error($model,'answer'); ?>

		<div class="form-actions">
			<?php $this->widget('bootstrap.widgets.TbButton', array(
					'buttonType'=>'submit',
					'type'=>'primary',
					'label'=>'保存'
			)); ?>
		</div>

		<?php $this->endWidget() ?>
	</div>
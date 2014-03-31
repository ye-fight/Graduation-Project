<?php
	$this->pageTitle = '编辑问题';

	$this->menu=array(
		array('label'=>'新建答疑','url'=>array('create'), 'linkOptions'=>array('target'=>'_blank')),
		array('label'=>'查看答疑','url'=>array('view','id'=>$model->questionid),  'linkOptions'=>array('target'=>'_blank')),
		array('label'=>'删除答疑','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->questionid),'confirm'=>'你确定要删除吗？')),
		array('label'=>'答疑管理','url'=>array('admin')),
	);
	?>

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
		<?php $this->widget('ext.wdueditor.WDueditor', array(
			'model' => $model,
			'attribute' => 'answer',
		)) ?>			
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
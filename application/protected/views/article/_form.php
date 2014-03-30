<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'article-form',
	'enableAjaxValidation'=>false,
)); ?>

<p class="help-block">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<?php echo $form->textFieldRow($model,'title',array('class'=>'span5','maxlength'=>80)); ?>

	<?php echo $form->textFieldRow($model,'keywords',array('class'=>'span5','maxlength'=>40)); ?>

	<?php echo $form->textAreaRow($model,'description',array('rows'=>6, 'cols'=>50, 'class'=>'span8')); ?>

	<?php echo $form->dropDownListRow($model, 'category_catid', Category::model()->getCategory()); ?>

	<?php echo $form->checkboxRow($model, 'status') ?>
	
	<?php echo $form->labelEx($model,'content'); ?>
	<?php $this->widget('ext.wdueditor.WDueditor', array(
		'model' => $model,
		'attribute' => 'content',
	)) ?>	
	<?php echo $form->error($model,'content'); ?>


<div class="form-actions">
	<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? '新建' : '保存',
		)); ?>
</div>

<?php $this->endWidget(); ?>

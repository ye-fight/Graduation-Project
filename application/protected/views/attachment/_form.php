<?php
/* @var $this AttachmentController */
/* @var $model Attachment */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'attachment-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'filename'); ?>
		<?php echo $form->textField($model,'filename',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'filename'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'filepath'); ?>
		<?php echo $form->textField($model,'filepath',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'filepath'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'filetype'); ?>
		<?php echo $form->textField($model,'filetype'); ?>
		<?php echo $form->error($model,'filetype'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'user_userid'); ?>
		<?php echo $form->textField($model,'user_userid'); ?>
		<?php echo $form->error($model,'user_userid'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
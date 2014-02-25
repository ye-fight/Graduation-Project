<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

		<?php echo $form->textFieldRow($model,'userid',array('class'=>'span5')); ?>

		<?php echo $form->textFieldRow($model,'username',array('class'=>'span5','maxlength'=>16)); ?>

			<?php echo $form->textFieldRow($model,'email',array('class'=>'span5','maxlength'=>45)); ?>

		<?php echo $form->textFieldRow($model,'lastloginip',array('class'=>'span5','maxlength'=>15)); ?>

		<?php echo $form->textFieldRow($model,'lastlogintime',array('class'=>'span5')); ?>

		<?php echo $form->textFieldRow($model,'realname',array('class'=>'span5','maxlength'=>45)); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType' => 'submit',
			'type'=>'primary',
			'label'=>'Search',
		)); ?>
	</div>

<?php $this->endWidget(); ?>

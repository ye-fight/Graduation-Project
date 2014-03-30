<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

		<?php echo $form->textFieldRow($model,'quizid',array('class'=>'span5')); ?>

		<?php echo $form->textAreaRow($model,'quiz',array('rows'=>6, 'cols'=>50, 'class'=>'span8')); ?>

		<?php echo $form->textFieldRow($model,'quiz_select',array('class'=>'span5','maxlength'=>45)); ?>

		<?php echo $form->textFieldRow($model,'quiz_select_number',array('class'=>'span5')); ?>

		<?php echo $form->textAreaRow($model,'quiz_answer',array('rows'=>6, 'cols'=>50, 'class'=>'span8')); ?>

		<?php echo $form->textAreaRow($model,'quiz_describe',array('rows'=>6, 'cols'=>50, 'class'=>'span8')); ?>

		<?php echo $form->textFieldRow($model,'createtime',array('class'=>'span5')); ?>

		<?php echo $form->textFieldRow($model,'user_userid',array('class'=>'span5')); ?>

		<?php echo $form->textFieldRow($model,'quiztype_id',array('class'=>'span5')); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType' => 'submit',
			'type'=>'primary',
			'label'=>'Search',
		)); ?>
	</div>

<?php $this->endWidget(); ?>

<div class="view">

		<b><?php echo CHtml::encode($data->getAttributeLabel('quizid')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->quizid),array('view','id'=>$data->quizid)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('quiz')); ?>:</b>
	<?php echo CHtml::encode($data->quiz); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('quiz_select')); ?>:</b>
	<?php echo CHtml::encode($data->quiz_select); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('quiz_select_number')); ?>:</b>
	<?php echo CHtml::encode($data->quiz_select_number); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('quiz_answer')); ?>:</b>
	<?php echo CHtml::encode($data->quiz_answer); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('quiz_describe')); ?>:</b>
	<?php echo CHtml::encode($data->quiz_describe); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('createtime')); ?>:</b>
	<?php echo CHtml::encode($data->createtime); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('user_userid')); ?>:</b>
	<?php echo CHtml::encode($data->user_userid); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('quiztype_id')); ?>:</b>
	<?php echo CHtml::encode($data->quiztype_id); ?>
	<br />

	*/ ?>

</div>
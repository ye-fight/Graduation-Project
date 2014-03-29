<div class="view">

		<b><?php echo CHtml::encode($data->getAttributeLabel('questionid')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->questionid),array('view','id'=>$data->questionid)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('title')); ?>:</b>
	<?php echo CHtml::encode($data->title); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('content')); ?>:</b>
	<?php echo CHtml::encode($data->content); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('createtime')); ?>:</b>
	<?php echo CHtml::encode($data->createtime); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('answertime')); ?>:</b>
	<?php echo CHtml::encode($data->answertime); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('answer')); ?>:</b>
	<?php echo CHtml::encode($data->answer); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('status')); ?>:</b>
	<?php echo CHtml::encode($data->status); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('questioner_name')); ?>:</b>
	<?php echo CHtml::encode($data->questioner_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('questioner_email')); ?>:</b>
	<?php echo CHtml::encode($data->questioner_email); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('user_userid')); ?>:</b>
	<?php echo CHtml::encode($data->user_userid); ?>
	<br />

	*/ ?>

</div>
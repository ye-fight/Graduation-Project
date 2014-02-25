<?php
/* @var $this AttachmentController */
/* @var $data Attachment */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('aid')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->aid), array('view', 'id'=>$data->aid)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('filename')); ?>:</b>
	<?php echo CHtml::encode($data->filename); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('filepath')); ?>:</b>
	<?php echo CHtml::encode($data->filepath); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('filetype')); ?>:</b>
	<?php echo CHtml::encode($data->filetype); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('user_userid')); ?>:</b>
	<?php echo CHtml::encode($data->user_userid); ?>
	<br />


</div>
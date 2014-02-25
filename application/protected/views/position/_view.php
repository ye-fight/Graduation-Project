<?php
/* @var $this PositionController */
/* @var $data Position */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('posid')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->posid), array('view', 'id'=>$data->posid)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('name')); ?>:</b>
	<?php echo CHtml::encode($data->name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('maxnum')); ?>:</b>
	<?php echo CHtml::encode($data->maxnum); ?>
	<br />


</div>
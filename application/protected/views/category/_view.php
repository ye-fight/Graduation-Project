<div class="view">
	<b><?php echo CHtml::encode($data->getAttributeLabel('catid')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->catid),array('view','id'=>$data->catid)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('catname')); ?>:</b>
	<?php echo CHtml::encode($data->catname); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('items')); ?>:</b>
	<?php echo CHtml::encode($data->items); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('is_single')); ?>:</b>
	<?php echo CHtml::encode($data->is_single); ?>
</div>
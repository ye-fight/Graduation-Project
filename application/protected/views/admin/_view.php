<?php
/* @var $this AdminController */
/* @var $data Admin */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('userid')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->userid), array('view', 'id'=>$data->userid)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('username')); ?>:</b>
	<?php echo CHtml::encode($data->username); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('password')); ?>:</b>
	<?php echo CHtml::encode($data->password); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('encrypt')); ?>:</b>
	<?php echo CHtml::encode($data->encrypt); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('lastloginip')); ?>:</b>
	<?php echo CHtml::encode($data->lastloginip); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('lastlogintime')); ?>:</b>
	<?php echo CHtml::encode($data->lastlogintime); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('email')); ?>:</b>
	<?php echo CHtml::encode($data->email); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('realname')); ?>:</b>
	<?php echo CHtml::encode($data->realname); ?>
	<br />

	*/ ?>

</div>
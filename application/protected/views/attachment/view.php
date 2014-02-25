<?php
$this->breadcrumbs=array(
	'Attachments'=>array('index'),
	$model->aid,
);

$this->menu=array(
array('label'=>'List Attachment','url'=>array('index')),
array('label'=>'Create Attachment','url'=>array('create')),
array('label'=>'Update Attachment','url'=>array('update','id'=>$model->aid)),
array('label'=>'Delete Attachment','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->aid),'confirm'=>'Are you sure you want to delete this item?')),
array('label'=>'Manage Attachment','url'=>array('admin')),
);
?>

<h1>View Attachment #<?php echo $model->aid; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
'data'=>$model,
'attributes'=>array(
		'aid',
		'filename',
		'filepath',
		'filetype',
		'user_userid',
),
)); ?>

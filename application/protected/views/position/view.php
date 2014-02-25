<?php
/* @var $this PositionController */
/* @var $model Position */

$this->breadcrumbs=array(
	'Positions'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List Position', 'url'=>array('index')),
	array('label'=>'Create Position', 'url'=>array('create')),
	array('label'=>'Update Position', 'url'=>array('update', 'id'=>$model->posid)),
	array('label'=>'Delete Position', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->posid),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Position', 'url'=>array('admin')),
);
?>

<h1>View Position #<?php echo $model->posid; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'posid',
		'name',
		'maxnum',
	),
)); ?>

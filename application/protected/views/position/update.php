<?php
/* @var $this PositionController */
/* @var $model Position */

$this->breadcrumbs=array(
	'Positions'=>array('index'),
	$model->name=>array('view','id'=>$model->posid),
	'Update',
);

$this->menu=array(
	array('label'=>'List Position', 'url'=>array('index')),
	array('label'=>'Create Position', 'url'=>array('create')),
	array('label'=>'View Position', 'url'=>array('view', 'id'=>$model->posid)),
	array('label'=>'Manage Position', 'url'=>array('admin')),
);
?>

<h1>Update Position <?php echo $model->posid; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
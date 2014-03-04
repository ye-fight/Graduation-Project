<?php
$this->breadcrumbs=array(
	'Users'=>array('index'),
	$model->userid=>array('view','id'=>$model->userid),
	'Update',
);

	$this->menu=array(
	array('label'=>'用户列表','url'=>array('index')),
	array('label'=>'新建用户','url'=>array('create')),
	array('label'=>'查看用户','url'=>array('view','id'=>$model->userid)),
	array('label'=>'管理用户','url'=>array('admin')),
	);
	?>

	<h1>编辑用户 <?php echo $model->userid; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>
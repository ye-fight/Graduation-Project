<?php
$this->breadcrumbs=array(
	'Categories'=>array('index'),
	$model->catid=>array('view','id'=>$model->catid),
	'Update',
);

	$this->menu=array(
	array('label'=>'栏目列表','url'=>array('index')),
	array('label'=>'新建栏目','url'=>array('create')),
	array('label'=>'查看栏目','url'=>array('view','id'=>$model->catid)),
	array('label'=>'管理栏目','url'=>array('admin')),
	);
	?>

	<h1>编辑栏目 <?php echo $model->catid; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>
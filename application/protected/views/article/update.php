<?php
$this->breadcrumbs=array(
	'Articles'=>array('index'),
	$model->title=>array('view','id'=>$model->id),
	'Update',
);

	$this->menu=array(
	array('label'=>'文章列表','url'=>array('index')),
	array('label'=>'新建文章','url'=>array('create')),
	array('label'=>'View Article','url'=>array('view','id'=>$model->id)),
	array('label'=>'文章管理','url'=>array('admin')),
	);
	?>

	<h1>编辑文章 <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>
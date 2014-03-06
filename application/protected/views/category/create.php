<?php
$this->breadcrumbs=array(
	'Categories'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'栏目列表','url'=>array('index')),
	array('label'=>'管理栏目','url'=>array('admin')),
);
?>

<h1>新建栏目</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
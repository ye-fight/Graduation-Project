<?php
$this->breadcrumbs=array(
	'Users'=>array('index'),
	'Create',
);

$this->menu=array(
array('label'=>'用户列表','url'=>array('index')),
array('label'=>'新建用户','url'=>array('create')),
array('label'=>'管理用户','url'=>array('admin')),
);
?>

<h1>新建用户</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
<?php
$this->breadcrumbs=array(
	'Articles'=>array('index'),
	'Create',
);

$this->menu=array(
array('label'=>'文章列表','url'=>array('index')),
array('label'=>'文章管理','url'=>array('admin')),
);
?>

<h1>新建文章</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
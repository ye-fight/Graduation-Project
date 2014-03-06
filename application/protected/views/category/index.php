<?php
$this->breadcrumbs=array(
	'Categories',
);

$this->menu=array(
	array('label'=>'栏目列表','url'=>array('index')),
	array('label'=>'新建栏目','url'=>array('create')),
	array('label'=>'管理栏目','url'=>array('admin')),
);
?>

<h1>Categories</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
'dataProvider'=>$dataProvider,
'itemView'=>'_view',
)); ?>

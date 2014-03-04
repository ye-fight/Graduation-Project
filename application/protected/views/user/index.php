<?php
$this->breadcrumbs=array(
	'Users',
);

$this->menu=array(
array('label'=>'用户列表','url'=>array('index')),
array('label'=>'新建用户','url'=>array('create')),
array('label'=>'管理用户','url'=>array('admin')),
);
?>

<h1>用户列表</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
'dataProvider'=>$dataProvider,
'itemView'=>'_view',
)); ?>

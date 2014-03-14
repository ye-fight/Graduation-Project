<?php
$this->breadcrumbs=array(
	'Articles',
);

$this->menu=array(
array('label'=>'新建文章','url'=>array('create')),
array('label'=>'文章管理','url'=>array('admin')),
);
?>

<h1>Articles</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
'dataProvider'=>$dataProvider,
'itemView'=>'_view',
)); ?>

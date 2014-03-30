<?php
$this->breadcrumbs=array(
	'Quizs',
);

$this->menu=array(
array('label'=>'Create Quiz','url'=>array('create')),
array('label'=>'Manage Quiz','url'=>array('admin')),
);
?>

<h1>Quizs</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
'dataProvider'=>$dataProvider,
'itemView'=>'_view',
)); ?>

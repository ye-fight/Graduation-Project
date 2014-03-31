<?php
$this->pageTitle = '编辑管理员';

$this->menu=array(
	array('label'=>'新建','url'=>array('create')),
	array('label'=>'查看','url'=>array('view','id'=>$model->userid)),
	array('label'=>'管理员管理','url'=>array('admin')),
	);
?>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>
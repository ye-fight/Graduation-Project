<?php
$this->pageTitle = '新建管理员';

$this->menu=array(
	array('label'=>'管理员管理','url'=>array('admin')),
);
?>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
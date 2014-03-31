<?php
$this->pageTitle = '新建栏目';

$this->menu=array(
	array('label'=>'管理栏目','url'=>array('admin')),
);
?>
<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
<?php
$this->pageTitle = '新建文章';


$this->menu=array(
	array('label'=>'文章管理','url'=>array('admin')),
);
?>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
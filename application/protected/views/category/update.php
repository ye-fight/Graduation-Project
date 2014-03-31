<?php
$this->pageTitle = '编辑栏目';

$this->menu=array(
	array('label'=>'管理栏目','url'=>array('admin')),
	array('label'=>'新建栏目','url'=>array('create')),
	array('label'=>'查看栏目','url'=>array('view','id'=>$model->catid)),
);
	?>
<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>
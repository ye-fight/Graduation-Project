<?php
$this->pageTitle = '编辑文章';


$this->menu=array(
	array('label'=>'新建文章','url'=>array('create')),
	array('label'=>'文章管理','url'=>array('admin')),
	array('label'=>'查看文章','url'=>array('view','id'=>$model->id), 'linkOptions'=>array('target'=>'_blank')),
	array('label'=>'删除文章','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'你确定要删除吗？')),
);
?>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>
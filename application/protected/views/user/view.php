<?php
$this->pageTitle = '查看详情';

$this->menu=array(
	array('label'=>'新建','url'=>array('create')),
	array('label'=>'编辑','url'=>array('update','id'=>$model->userid)),
	array('label'=>'删除','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->userid),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'管理员管理','url'=>array('admin')),
);
?>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'userid',
		'username',
		'email',
		'lastloginip',
		'lastlogintime',
		'realname',
),
)); ?>

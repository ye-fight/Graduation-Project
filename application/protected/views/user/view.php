<?php
$this->breadcrumbs=array(
	'Users'=>array('index'),
	$model->userid,
);

$this->menu=array(
array('label'=>'用户列表','url'=>array('index')),
array('label'=>'新建用户','url'=>array('create')),
array('label'=>'编辑用户','url'=>array('update','id'=>$model->userid)),
array('label'=>'删除用户','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->userid),'confirm'=>'Are you sure you want to delete this item?')),
array('label'=>'管理用户','url'=>array('admin')),
);
?>

<h1>查看用户 #<?php echo $model->userid; ?></h1>

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

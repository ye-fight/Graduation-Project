<?php
$this->breadcrumbs=array(
	'Articles'=>array('index'),
	$model->title,
);

$this->menu=array(
array('label'=>'文章列表','url'=>array('index')),
array('label'=>'新建文章','url'=>array('create')),
array('label'=>'编辑文章','url'=>array('update','id'=>$model->id)),
array('label'=>'删除文章','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
array('label'=>'文章管理','url'=>array('admin')),
);
?>

<h1>View Article #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
'data'=>$model,
'attributes'=>array(
		'id',
		'title',
		'keywords',
		'description',
		'createtime',
		'updatetime',
		'status',
		'content',
		'user_userid',
		'category_catid',
),
)); ?>

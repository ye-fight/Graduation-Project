<?php
$this->breadcrumbs=array(
	'Comments'=>array('index'),
	$model->commentid,
);

$this->menu=array(
array('label'=>'List Comment','url'=>array('index')),
array('label'=>'Create Comment','url'=>array('create')),
array('label'=>'Update Comment','url'=>array('update','id'=>$model->commentid)),
array('label'=>'Delete Comment','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->commentid),'confirm'=>'Are you sure you want to delete this item?')),
array('label'=>'Manage Comment','url'=>array('admin')),
);
?>

<h1>View Comment #<?php echo $model->commentid; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
'data'=>$model,
'attributes'=>array(
		'commentid',
		'author_name',
		'author_ip',
		'comment_content',
		'article_id',
),
)); ?>

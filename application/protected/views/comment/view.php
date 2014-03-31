<?php
$this->pageTitle = '查看评论';

$this->menu=array(
	array('label'=>'评论管理','url'=>array('admin')),
	array('label'=>'编辑评论','url'=>array('update','id'=>$model->commentid)),
	array('label'=>'删除评论','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->commentid),'confirm'=>'你确定要删除吗？')),
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

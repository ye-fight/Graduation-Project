<?php
$this->pageTitle = '编辑评论';

$this->menu=array(
	array('label'=>'评论管理','url'=>array('admin')),
	array('label'=>'删除评论','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->commentid),'confirm'=>'你确定要删除吗？')),
);
?>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>
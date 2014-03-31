<?php
$this->pageTitle = '评论管理';

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
$('.search-form').toggle();
return false;
});
$('.search-form form').submit(function(){
$.fn.yiiGridView.update('comment-grid', {
data: $(this).serialize()
});
return false;
});
");
?>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button btn')); ?>
<div class="search-form" style="display:none">
	<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('bootstrap.widgets.TbGridView',array(
'id'=>'comment-grid',
'dataProvider'=>$model->search(),
'filter'=>$model,
'columns'=>array(
		'commentid',
		'author_name',
		'author_ip',
		'comment_content',
		'article_id',
array(
'class'=>'bootstrap.widgets.TbButtonColumn',
),
),
)); ?>

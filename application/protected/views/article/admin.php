<?php
$this->pageTitle = '文章管理';

$this->menu=array(
	array('label'=>'新建文章','url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
	$('.search-button').click(function(){
			$('.search-form').toggle();
			return false;
	});
	$('.search-form form').submit(function(){
		$.fn.yiiGridView.update('article-grid', {
			data: $(this).serialize()
		});
		return false;
	});
");
?>

<?php echo CHtml::link('高级搜索','#',array('class'=>'search-button btn')); ?>
<div class="search-form" style="display:none">
	<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('bootstrap.widgets.TbGridView',array(
'id'=>'article-grid',
'dataProvider'=>$model->search(),
'filter'=>$model,
'columns'=>array(
		'id',
		'title',
		array('name'=>'createtime', 'value'=>'date("Y-m-d H:s", $data->createtime)'),
		array('name'=>'updatetime', 'value'=>'date("Y-m-d H:s", $data->updatetime)'),
		array('name'=>'category_catid', 'value'=>'$data->category->catname'),
		array('name'=>'user_userid', 'value'=>'$data->author->username'),
array(
'class'=>'bootstrap.widgets.TbButtonColumn',
),
),
)); ?>

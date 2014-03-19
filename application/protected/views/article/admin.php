<?php
$this->breadcrumbs=array(
	'Articles'=>array('index'),
	'Manage',
);

$this->menu=array(
array('label'=>'文章列表','url'=>array('index')),
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

<h1>文章管理</h1>

<p>
	您可以选择输入一个比较运算符 (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>
		&lt;&gt;</b>
	or <b>=</b>) 在你的每一个搜索的值的前面来指定应该如何做比较。
</p>

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
		'createtime',
		'updatetime',
		'category_catid',
		/*
		'description',
		'status',
		'content',
		'user_userid',
		
		*/
array(
'class'=>'bootstrap.widgets.TbButtonColumn',
),
),
)); ?>

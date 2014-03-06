<?php
$this->breadcrumbs=array(
	'Categories'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'栏目列表','url'=>array('index')),
	array('label'=>'新建栏目','url'=>array('create')),
	array('label'=>'管理栏目','url'=>array('admin')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
$('.search-form').toggle();
return false;
});
$('.search-form form').submit(function(){
$.fn.yiiGridView.update('category-grid', {
data: $(this).serialize()
});
return false;
});
");
?>

<h1>栏目管理</h1>

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
	'id'=>'category-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'catid',
		'catname',
		/*'description',*/
		'items',
		'is_single',
		array('class'=>'bootstrap.widgets.TbButtonColumn',),
	),
)); ?>

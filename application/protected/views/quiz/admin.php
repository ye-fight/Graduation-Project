<?php
$this->breadcrumbs=array(
	'Quizs'=>array('index'),
	'Manage',
);

$this->menu=array(
array('label'=>'List Quiz','url'=>array('index')),
array('label'=>'Create Quiz','url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
	$('.search-button').click(function(){
		$('.search-form').toggle();
			return false;
		});
		$('.search-form form').submit(function(){
			$.fn.yiiGridView.update('quiz-grid', {
			data: $(this).serialize()
		});
		return false;
	});
	");
?>

<ul class="nav nav-tabs">
	<li class="active">
		<a href="#">题目管理</a>
	</li>
	<li class="dropdown pull-right">
		<?php echo CHtml::link('添加试题', array('create')) ?>
	</li>
</ul>

<?php echo CHtml::link('搜索','#',array('class'=>'search-button btn')); ?>
<div class="search-form" style="display:none">
	<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'quiz-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'quizid',
		array(
			'name' => 'quiztype_id',
			'value' => '$data->type->quiz_type',
		),
		array(
			'name' => 'quiz',
			'value' => 'strip_tags($data->quiz)',
		),
		array(
			'name' => 'createtime',
			'value' => 'date("Y-m-d H:s", $data->createtime)'
		),
		array(
			'name' => 'user_userid',
			'value' => '$data->user->username',
		),
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
		),
	),
)); ?>

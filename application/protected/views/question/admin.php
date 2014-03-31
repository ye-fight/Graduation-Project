<?php
$this->pageTitle = '答疑管理';


$this->menu=array(
	array('label'=>'新建答疑','url'=>array('create'), 'linkOptions'=>array('target'=>'_blank')),
);

Yii::app()->clientScript->registerScript('search', "
	$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
	});
	$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('question-grid', {
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
	'id'=>'question-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'questionid',
		'title',
		array('name'=>'createtime', 'value'=>'date("Y-m-d H:s", $data->createtime)'),
		array('name'=>'answertime', 'value'=>'$data->answertime ? date("Y-m-d H:s", $data->answertime):""'),
		array('name'=>'status', 'value'=>'$data->status ? "已回复":"未回复"'),
		array('name'=>'user_userid'),
		/*
		'questioner_name',
		'questioner_email',
		'user_userid',
		*/
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
		),
	),
)); ?>

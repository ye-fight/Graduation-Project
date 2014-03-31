<?php
$this->pageTitle = '管理员管理';

$this->menu=array(
	array('label'=>'新建管理员','url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
$('.search-form').toggle();
return false;
});
$('.search-form form').submit(function(){
$.fn.yiiGridView.update('user-grid', {
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
<?php
	$this->widget('bootstrap.widgets.TbGridView',array(
		'type'=>'bordered',
		'id'=>'user-grid',
		'dataProvider'=>$model->search(),
		'filter'=>$model,
		'columns'=>array(
			'userid',
			'username',
			/*'password',*/
			'email',
			'lastloginip',
			'lastlogintime',		
			'realname',
			array('class'=>'bootstrap.widgets.TbButtonColumn',),
		),
	)); 
?>

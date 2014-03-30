<?php
$this->breadcrumbs=array(
	'Quizs'=>array('index'),
	$model->quizid,
);

$this->menu=array(
array('label'=>'List Quiz','url'=>array('index')),
array('label'=>'Create Quiz','url'=>array('create')),
array('label'=>'Update Quiz','url'=>array('update','id'=>$model->quizid)),
array('label'=>'Delete Quiz','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->quizid),'confirm'=>'Are you sure you want to delete this item?')),
array('label'=>'Manage Quiz','url'=>array('admin')),
);
?>

<h1>View Quiz #<?php echo $model->quizid; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
'data'=>$model,
'attributes'=>array(
		'quizid',
		'quiz',
		'quiz_select',
		'quiz_select_number',
		'quiz_answer',
		'quiz_describe',
		'createtime',
		'user_userid',
		'quiztype_id',
),
)); ?>

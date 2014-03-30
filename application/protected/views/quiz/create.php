<?php
$this->breadcrumbs=array(
	'Quizs'=>array('index'),
	'Create',
);

$this->menu=array(
array('label'=>'List Quiz','url'=>array('index')),
array('label'=>'Manage Quiz','url'=>array('admin')),
);
?>

<ul class="nav nav-tabs">
	<li class="active">
		<a href="#">添加试题</a>
	</li>
	<li class="pull-right">
		<a href="<?php echo $this->createUrl('quiz/admin') ?>">题目管理</a>
	</li>
</ul>
<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
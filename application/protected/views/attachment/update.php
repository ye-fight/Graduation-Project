<?php
/* @var $this AttachmentController */
/* @var $model Attachment */

$this->breadcrumbs=array(
	'Attachments'=>array('index'),
	$model->aid=>array('view','id'=>$model->aid),
	'Update',
);

$this->menu=array(
	array('label'=>'List Attachment', 'url'=>array('index')),
	array('label'=>'Create Attachment', 'url'=>array('create')),
	array('label'=>'View Attachment', 'url'=>array('view', 'id'=>$model->aid)),
	array('label'=>'Manage Attachment', 'url'=>array('admin')),
);
?>

<h1>Update Attachment <?php echo $model->aid; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'article-form',
	'enableAjaxValidation'=>false,
)); ?>

<p class="help-block">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<?php echo $form->textFieldRow($model,'title',array('class'=>'span5','maxlength'=>80)); ?>

	<?php echo $form->textFieldRow($model,'keywords',array('class'=>'span5','maxlength'=>40)); ?>

	<?php echo $form->textAreaRow($model,'description',array('rows'=>6, 'cols'=>50, 'class'=>'span8')); ?>

	<?php echo $form->textFieldRow($model,'status',array('class'=>'span5')); ?>

	<?php $this->widget('application.extensions.tinymce.ETinyMce', array(
		'model' => $model,
		'attribute' => 'content',
		'editorTemplate' => 'full',
		'htmlOptions' =>array('rows'=>6, 'cols'=>50, 'class'=>'span8'),
		'options' => array(
			'theme_advanced_buttons1' =>
			'undo,redo,|,bold,italic,underline,|,justifyleft,justifycenter,justifyright,justifyfull,|,outdent, indent,|,advhr,|,sub,sup,|,bullist,numlist,|,formatselect,fontselect,fontsizeselect,|,cut,copy,paste,pastetext,pasteword,|,search,replace,',
			'theme_advanced_buttons2' => 'tablecontrols,|,removeformat,visualaid,',
			'theme_advanced_buttons3' => '',
			'theme_advanced_buttons4' => '',
			'theme_advanced_toolbar_location' => 'top',
			'theme_advanced_toolbar_align' => 'left',
			'theme_advanced_statusbar_location' => 'none',
			'theme_advanced_font_sizes' => "10=10pt,11=11pt,12=12pt,13=13pt,14=14pt,
			15=15pt,16=16pt,17=17pt,18=18pt,19=19pt,20=20pt",
		)
	)); ?>

<div class="form-actions">
	<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? '新建' : '保存',
		)); ?>
</div>

<?php $this->endWidget(); ?>

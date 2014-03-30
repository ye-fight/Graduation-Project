<?php $form=$this->beginWidget('CActiveForm',array(
	'id'=>'quiz-form',
	'enableAjaxValidation'=>false,
	'htmlOptions'=> array('class'=>'form-horizontal')
)); ?>

<script>
function setAnswerHtml(t,o)
{
	$("."+o).hide();
	$("#"+o+"_"+t).show();
	if(parseInt(t) == 0)$("#selectnumber").hide();
	else $("#selectnumber").show();
}	
</script>
<?php echo $form->errorSummary($model); ?>
	
	<div class="control-group">
		<?php echo $form->labelEx($model, 'quiztype_id', array('class'=>'control-label')) ?>
		<div class="controls">
			<?php echo $form->dropDownList($model,'quiztype_id', $this->getType(), array(
				'onchange'=>'javascript:setAnswerHtml(
					$(this).find(\'option:selected\').val(),
					\'answerbox\'
				);'
			)); ?>
			<?php echo $form->error($model, 'quiztype_id') ?>
		</div>
	</div>
	<div class="control-group">
		<?php echo $form->labelEx($model, 'quiz', array('class'=>'control-label')) ?>
		<div class="controls">
			<?php $this->widget('ext.wdueditor.WDueditor', array(
				'model' => $model,
				'attribute' => 'quiz',
				'editorOptions' => array('pasteplain'=>true)				
			)) ?>
			<?php echo $form->error($model, 'quiz') ?>
		</div>
	</div>
	<div class="control-group">
		<?php echo $form->labelEx($model, 'quiz_select', array('class'=>'control-label')) ?>
		<div class="controls">
			<?php $this->widget('ext.wdueditor.WDueditor', array(
				'model' => $model,
				'attribute' => 'quiz_select',
				'editorOptions' => array('pasteplain'=>true)
			)) ?>			
			<?php echo $form->error($model, 'quiz_select') ?>			
		</div>
	</div>
	<div class="control-group">
		<?php echo $form->labelEx($model, 'quiz_select_number', array('class'=>'control-label')) ?>
		<div class="controls">
			<?php echo $form->dropDownList($model, 'quiz_select_number', $this->getAnswerNums()) ?>
			<?php echo $form->error($model, 'quiz_select_number') ?>			
		</div>
	</div>
	<div class="control-group">
		<?php echo $form->labelEx($model, 'quiz_answer', array('class'=>'control-label')) ?>
		<div class="controls">
			<?php 
				$answerbox = $this->getAnswerBox();
				if ($model->isNewRecord) {
					foreach ($answerbox['data'] as $key => $value) {
						$option = ($key == 1) ? '':'style="display:none;"';
						printf('<div id="%s" class="%s" %s>', 
							$answerbox['name'] . '_' . $key, 
							$answerbox['name'],
							$option
						);

						$childdata = str_split($value);
						foreach ($childdata as $k => $v) {
							if ($key == 2) {
								$type = 'checkbox';
							} else {
								$type = 'radio';
							}
							$name = 'targs[questionanswer' . $key . ']';

							printf('<label class="%s inline"><input type="%s" name="%s" value="%s"  autocomplete="off" />%s</label>', $type, $type, $name, $v, $v);
						}
						echo '</div>';
					}
				} else {
					foreach ($answerbox['data'] as $key => $value) {
						$option = ($key == $model->quiztype_id) ? '':'style="display:none;"';
						printf('<div id="%s" class="%s" %s>', 
							$answerbox['name'] . '_' . $key, 
							$answerbox['name'],
							$option
						);
						$answer = str_split($model->quiz_answer);

						$childdata = str_split($value);
						foreach ($childdata as $k => $v) {
							if ($key == 2) {
								$type = 'checkbox';
							} else {
								$type = 'radio';
							}
							$name = 'targs[questionanswer' . $key . ']';

							if ($key == $model->quiztype_id) {
								if (in_array($v, $answer)) {
									$check = 'checked';
								} else {
									$check = '';
								}
								printf('<label class="%s inline"><input type="%s" name="%s" value="%s"  autocomplete="off" %s />%s</label>', $type, $type, $name, $v, $check, $v);
							} else {
								printf('<label class="%s inline"><input type="%s" name="%s" value="%s"  autocomplete="off" />%s</label>', $type, $type, $name, $v, $v);
							}

						}
						echo '</div>';
					}					
				}
			?>	
			<?php echo $form->error($model, 'quiz_answer') ?>									
		</div>
	</div>

	<div class="control-group">
		<?php echo $form->labelEx($model, 'quiz_describe', array('class'=>'control-label')) ?>
		<div class="controls">
			<?php $this->widget('ext.wdueditor.WDueditor', array(
				'model' => $model,
				'attribute' => 'quiz_describe',
			)) ?>			
			<?php echo $form->error($model, 'quiz_describe') ?>						
		</div>
	</div>	


	
<div class="form-actions">
	<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? '创建' : '保存',
		)); ?>
</div>

<?php $this->endWidget(); ?>
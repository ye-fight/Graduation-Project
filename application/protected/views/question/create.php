<?php
  $this->pageTitle = '我要咨询 - ' . Yii::app()->name;
?>

<div class="container">
  <div class="row">
    <div class="col-lg-12">
      <h1 class="page-header">咨询</h1>
      <ol class="breadcrumb">
        <li><?php echo CHtml::link('首页', '/') ?></li>
        <li><?php echo CHtml::link('医生解答', array('question/index')) ?></li>
        <li class="active">咨询</li>
      </ol>
    </div>    
  </div>
  <div class="row">
    <div class="col-lg-6">
      <?php $form=$this->beginWidget('CActiveForm',array(
        'id'=>'question-form',
        'enableClientValidation'=>true,
        'clientOptions'=>array(
          'validateOnSubmit'=>true,
        ),
        'htmlOptions'=>array(
          'class'=>'form-horizontal',
          'role'=>'form'
        )
      )); ?>      
        <div class="form-group">
          <?php echo $form->labelEx($model, 'questioner_name', array('class'=>'col-sm-3 control-label')) ?>
          <div class="col-sm-9">
            <?php echo $form->textField($model, 'questioner_name', array('class'=>'form-control')) ?>
            <?php echo $form->error($model, 'questioner_name', array('class'=>'help-block')) ?>
          </div>
        </div>
        <div class="form-group">
          <?php echo $form->labelEx($model, 'questioner_email', array('class'=>'col-sm-3 control-label')) ?>
          <div class="col-sm-9">
            <?php echo $form->textField($model, 'questioner_email', array('class'=>'form-control')) ?>
            <?php echo $form->error($model, 'questioner_email', array('class'=>'help-block')) ?>
          </div>
        </div>        
        <div class="form-group">
          <?php echo $form->labelEx($model, 'title', array('class'=>'col-sm-3 control-label')) ?>
          <div class="col-sm-9">
            <?php echo $form->textField($model, 'title', array('class'=>'form-control')) ?>
            <?php echo $form->error($model, 'title', array('class'=>'help-block')) ?>
          </div>
        </div>  
        <div class="form-group">
          <?php echo $form->labelEx($model, 'content', array('class'=>'col-sm-3 control-label')) ?>
          <div class="col-sm-9">
            <?php echo $form->textArea($model, 'content', array('class'=>'form-control', 'rows'=>5)) ?>
            <?php echo $form->error($model, 'content', array('class'=>'help-block')) ?>
          </div>
        </div>                 
        <div class="form-group">
          <div class="col-sm-offset-3 col-sm-9">
            <button type="submit" class="btn btn-primary">提交</button>
          </div>
        </div>
      <?php $this->endWidget(); ?>
    </div>
  </div>
</div>

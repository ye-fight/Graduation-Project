<?php
$this->breadcrumbs=array(
  $model->title,
);
?>

<div class="container">
      
    <div class="row">
      
      <div class="col-lg-12">
        <h1 class="page-header">答疑详情</h1>
        <ol class="breadcrumb">
          <li><?php echo CHtml::link('首页', '/') ?></li>
          <li><?php echo CHtml::link('医生解答', array('question/index')) ?></li>
          <li class="active">答疑详情</li>
        </ol>
      </div>
    </div>

    <div class="row">

      <div class="col-lg-8 question-box">
        <h5 class="text-primary">问题主题：</h5>
        <p><?php echo $model->title ?></p>
        <h5 class="text-primary">问题描述：</h5>
        <p><?php echo $model->content ?></p>
        <h5 class="text-primary">咨询日期</h5>
        <p><?php echo date('Y-m-d H:i', $model->createtime) ?></p>
        <?php if ($model->status) { ?>
        <h5 class="text-primary">回答日期</h5>
        <p><?php echo date('Y-m-d H:i', $model->answertime) ?></p>
        <h5 class="text-primary">医生答疑</h5>
        <?php echo $model->answer; ?>
        <?php } else { ?>
        <h5 class="text-primary">医生答疑</h5>
        <p>尚未有医生回答，请耐心等待。</p>
        <?php } ?>

      </div>
        
        <div class="col-lg-4">
          <div class="well">
            <h4>站内搜索</h4>
            <form action="" method="get">
              <div class="input-group">
                <input type="hidden" name="r" value="question">
                <input type="text" class="form-control" name="keyword">
                <span class="input-group-btn">
                  <button class="btn btn-default" type="submit"><i class="fa fa-search"></i></button>
                </span>                
              </div><!-- /input-group -->
            </form>
          </div><!-- /well -->
          <div class="well">
            <h4>热门问题</h4>
            <div class="row">
              <ul class="list-unstyled col-lg-12">

              </ul>
            </div>
          </div><!-- /well -->
        </div>
      </div>

    </div>
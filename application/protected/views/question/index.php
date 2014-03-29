<?php 
    $this->pageTitle = '医生答疑';
?>
<div class="container">
	<div class="row">

		<div class="col-lg-12">
		  	<h1 class="page-header">医生答疑</h1>
		  	<ol class="breadcrumb">
			    <li><?php echo CHtml::link('首页', '/') ?></li>
			    <li class="active">医生答疑</li>
		  	</ol>
		</div>

	</div>
	<div class="row">
    <div class="col-lg-8">
      <?php 
        if (empty($data)) {
          echo '<p>无搜索结果</p>';
        } else {
          foreach ($data as $key => $value) { 
      ?>
      <div class="panel panel-default">
        <div class="panel-heading">
          <?php 
            if ($value->status) {
              echo '<span class="glyphicon glyphicon-ok"></span>  ';
            }
            echo CHtml::link(
              $value->title, 
              array('question/view', 'id'=>$value->questionid)
            );
          ?>

          <span class="pull-right"><?php echo date('Y-m-d H:i', $value->createtime) ?></span>          
        </div>
        <div class="panel-body">
          <?php echo mb_substr($value->content, 0, 300) ?>
          <br>
          <a class="btn btn-primary pull-right" href="<?php echo $this->createUrl(
            'question/view', array('id'=>$value->questionid)
          ) ?>">了解详情 <i class="icon-angle-right"></i></a>        
        </div>
      </div>      
      <?php } ?>
      <?php $this->widget('CLinkPager', Page::go($pages)); } ?>
    </div>

    <div class="col-lg-4">
      <div class="well">
        <h4>站内搜索</h4>
        <form action="" method="get">
          <div class="input-group">
            <input type="hidden" name="r" value="article">
            <input type="text" class="form-control" name="keyword">
            <span class="input-group-btn">
              <button class="btn btn-default" type="submit"><i class="fa fa-search"></i></button>
            </span>                
          </div><!-- /input-group -->
        </form>
      </div><!-- /well -->
      <div class="well">
        <h4>热门文章</h4>
        <div class="row">
          <ul class="list-unstyled col-lg-12">

          </ul>
        </div>
      </div><!-- /well -->
    </div>
  </div>

</div>
<?php
$this->breadcrumbs=array(
  $cat->catname => array('index', array('catid'=>$cat->catid)),
  $model->title,
);
?>

<div class="container">
      
    <div class="row">
      
        <div class="col-lg-12">
          <h1 class="page-header"><?php echo $model->title ?></h1>
          <ol class="breadcrumb">
          <li><?php echo CHtml::link('首页', '/') ?></li>
          <li><?php echo CHtml::link($cat->catname, array(
            'article/index', 
            'catid'=>$cat->catid)
          ) ?></li>
        <li class="active"><?php echo $model->title ?></li>
      </ol>
    </div>
    </div>

    <div class="row">

      <div class="col-lg-8">
        
          <!-- the actual blog post: title/author/date/content -->
          <hr>
          <p><i class="icon-time"></i> <?php echo date('Y年m月d日', $model->updatetime) ?> 来源于 <?php echo $model->from ? $model->from : '本站' ?> <span class="pull-right glyphicon glyphicon-star">点击量:<?php echo $model->hits ?></span></p>
          <hr>
          <?php 
            if (!empty($model->thumb)) {
              printf('<img src="\s" class="img-responsive"><hr>', $model->thumb);
            }
          ?>
          
          <?php echo $model->content ?>

          <hr>

          <!-- the comment box -->
          <div class="well">
            <h4>发表评论:</h4>
            <form class="form-horizontal" role="form" method="post" action="">
              <div class="form-group">
                  <label for="inputUsername" class="col-sm-1 control-label">昵称</label>
                  <div class="col-sm-11">
                      <input name="guestname" type="text" class="form-control" id="inputUsername" placeholder="留空则为匿名">
                  </div>
              </div>          
              <div class="form-group">
                  <label for="inputEmail" class="col-sm-1 control-label">电子邮箱</label>
                  <div class="col-sm-11">
                      <input name="guestemail" type="email" class="form-control" id="inputEmail" placeholder="email">
                      <span class="help-block">(我们会为您保密) (必填)</span>

                  </div>
              </div>  
              <div class="form-group">
                  <label class="col-sm-1 control-label">内容</label>
                  <div class="col-sm-11">
                    <textarea name="comment" class="form-control" rows="3"></textarea>
                  </div>
              </div>
              <div class="form-group">
                <div class="col-sm-offset-1 col-sm-11">
                  <button type="submit" class="btn btn-primary">提交评论</button>
                </div>
              </div>
            </form>
          </div>
          
          <hr>
          <?php foreach ($comments as $key => $value) { ?>
          <h3><?php echo $value->author_name ?> <small class="pull-right"><?php echo date('Y-m-d H:s', $value->createtime) ?></small></h3>
          <p><?php echo $value->comment_content ?></p>
          <?php } ?>
          <?php $this->widget('CLinkPager', Page::go($pages)) ?>
          <!-- the comments -->
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
                <?php foreach ($hots as $key => $value) {
                  printf('<li><a href="%s">%s</a></li>',
                    $this->createUrl('article/view', array('id'=>$value->id)),
                    $value->title
                  );
                } ?>
              </ul>
            </div>
          </div><!-- /well -->
        </div>
      </div>

    </div>
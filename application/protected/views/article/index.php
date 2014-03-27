<?php 
    $this->pageTitle = $catname;
?>
<div class="container">
	<div class="row">

		<div class="col-lg-12">
		  	<h1 class="page-header"><?php echo $catname ?></h1>
		  	<ol class="breadcrumb">
			    <li><?php echo CHtml::link('首页', '/') ?></li>
			    <li class="active"><?php echo $catname ?></li>
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
			<h1><?php echo CHtml::link(
				$value->title, 
				array('article/view', 'id'=>$value->id)
			 ) ?></h1>
			<p>来源于 <?php echo $value->from ? $value->from : '本站' ?></p>
			<hr>
			<p><i class="icon-time"></i> <?php echo date('Y年m月d日', $value->updatetime) ?></p>
			<hr>
      <?php if (!empty($value->thumb)) {
        printf('<a href="%s"><img src="%s" class="img-responsive"></a><hr>',
          $this->createUrl('article/view', array('id'=>$value->id)),
          $value->thumb);
      } ?>
      <?php 
          if (!empty($value->description)) {
            echo '<p>', $value->description, '</p>';
          }
      ?>
      <?php echo CHtml::link(
          '阅读更多 <i class="icon-angle-right"></i>', 
          array('article/view', 'id'=>$value->id), 
          array('class'=> 'btn btn-primary')
      ) ?>
			<hr>			
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
                  <button class="btn btn-default" type="submit"><i class="icon-search"></i></button>
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
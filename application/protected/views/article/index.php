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
		    <?php foreach ($data as $key => $value) { ?>
				<h1><?php echo CHtml::link(
					$value->title, 
					array('article/view', 'id'=>$value->id), 
					array('target'=>'_blank')
				 ) ?></h1>
				<p class="lead">by <a href="#">Start Bootstrap</a></p>
				<hr>
				<p><i class="icon-time"></i> <?php echo date('Y年m月d日', $value->updatetime) ?></p>
				<hr>
				<a href="blog-post.html"><img src="http://placehold.it/900x300" class="img-responsive"></a>
				<hr>
                <?php 
                    if (!empty($this->description)) {
                        echo '<p>', $this->description, '</p>';
                    }
                ?>
                <?php echo CHtml::link(
                    '阅读更多 <i class="icon-angle-right"></i>', 
                    array('article/view', 'id'=>$value->id), 
                    array('class'=> 'btn btn-primary')
                ) ?>
				<hr>			
			<?php } ?>

            <?php $this->widget('CLinkPager', Page::go($pages)) ?>

        </div>

        <div class="col-lg-4">
          <div class="well">
            <h4>Blog Search</h4>
            <div class="input-group">
              <input type="text" class="form-control">
              <span class="input-group-btn">
                <button class="btn btn-default" type="button"><i class="icon-search"></i></button>
              </span>
            </div><!-- /input-group -->
          </div><!-- /well -->
          <div class="well">
            <h4>Popular Blog Categories</h4>
              <div class="row">
                <div class="col-lg-6">
                  <ul class="list-unstyled">
                    <li><a href="#dinosaurs">Dinosaurs</a></li>
                    <li><a href="#spaceships">Spaceships</a></li>
                    <li><a href="#fried-foods">Fried Foods</a></li>
                    <li><a href="#wild-animals">Wild Animals</a></li>
                  </ul>
                </div>
                <div class="col-lg-6">
                  <ul class="list-unstyled">
                    <li><a href="#alien-abductions">Alien Abductions</a></li>
                    <li><a href="#business-casual">Business Casual</a></li>
                    <li><a href="#robots">Robots</a></li>
                    <li><a href="#fireworks">Fireworks</a></li>
                  </ul>
                </div>
              </div>
          </div><!-- /well -->
          <div class="well">
            <h4>Side Widget Well</h4>
            <p>Bootstrap's default well's work great for side widgets! What is a widget anyways...?</p>
          </div><!-- /well -->
        </div>
      </div>

    </div>
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
			<p><i class="icon-time"></i> <?php echo date('Y年m月d日', $model->updatetime) ?> by <a href="#">Start Boostrap</a></p>
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

          <!-- the comments -->
          <h3>Start Bootstrap <small>9:41 PM on August 24, 2013</small></h3>
          <p>This has to be the worst blog post I have ever read. It simply makes no sense. You start off by talking about space or something, then you randomly start babbling about cupcakes, and you end off with random fish names.</p>

          <h3>Start Bootstrap <small>9:47 PM on August 24, 2013</small></h3>
          <p>Don't listen to this guy, any blog with the categories 'dinosaurs, spaceships, fried foods, wild animals, alien abductions, business casual, robots, and fireworks' has true potential.</p>

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
		                    <li><a href="#dinosaurs">Dinosaurs</a></li>
		                    <li><a href="#spaceships">Spaceships</a></li>
		                    <li><a href="#fried-foods">Fried Foods</a></li>
		                    <li><a href="#wild-animals">Wild Animals</a></li>
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
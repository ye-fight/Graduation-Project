<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>

    <div id="myCarousel" class="carousel slide">
      <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
          <div class="item active">
            <div class="fill" style="background-image:url('images/slider-1.jpg');"></div>
            <div class="carousel-caption">
              <h1>欢迎进入糖尿病自我管理专题学习网站！</h1>
            </div>
          </div>
          <div class="item">
            <div class="fill" style="background-image:url('images/slider-3.jpg');"></div>
            <div class="carousel-caption">
              <h1>作者：叶江楠 指导老师：王腾</h1>
            </div>
          </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
          <span class="icon-prev"></span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
          <span class="icon-next"></span>
        </a>
    </div>

    <div class="section">

      <div class="container">

        <div class="row">
          <div class="col-lg-4 col-md-4">
            <h3><i class="glyphicon glyphicon-list"></i> <a href="<?php echo $this->createUrl('site/analyse') ?>">化验评估</a></h3>
            <p>填写化验单的数据，评估当前的身体健康状况</p>
          </div>
          <div class="col-lg-4 col-md-4">
            <h3><i class="glyphicon glyphicon-question-sign"></i> <a href="<?php echo $this->createUrl('site/selfTest') ?>">在线测试</a></h3>
            <p>快来检验血糖知识的掌握程度吧！</p>
          </div>
          <div class="col-lg-4 col-md-4">
            <h3><i class="glyphicon glyphicon-user"></i> <a href="<?php echo $this->createUrl('question/index') ?>">医生咨询</a></h3>
            <p>在线咨询医生，进一步得到你想知道的！！</p>
          </div>
        </div><!-- /.row -->

      </div><!-- /.container -->


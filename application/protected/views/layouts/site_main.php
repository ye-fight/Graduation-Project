<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?php echo $this->pageTitle, ' - ', Yii::app()->name; ?></title>

    <!-- Bootstrap core CSS -->
    <?php Yii::app()->getClientScript()->registerCssFile('assets/css/bootstrap.css') ?>
    <?php Yii::app()->getClientScript()->registerCssFile('assets/css/modern-business.css') ?>
    <?php Yii::app()->getClientScript()->registerCssFile('assets//font-awesome/css/font-awesome.min.css') ?>
  </head>

  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <?php echo CHtml::link( Yii::app()->name, '/', array('class'=>'navbar-brand')) ?>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><?php echo CHtml::link('关于本站', array('site/about')) ?></li>
            <li><?php echo CHtml::link('推荐资源', array('article/index', 'catid'=>3)) ?></li>
            <li><?php echo CHtml::link('血糖知识', array('article/index', 'catid'=>4)) ?></li>
            <li><?php echo CHtml::link('化验解读', array('site/analyse')) ?></li>
            <li><?php echo CHtml::link('自我评测', array('site/selfTest')) ?></li>
            <li><?php echo CHtml::link('医生答疑', array('question/index')) ?></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">其他栏目 <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="full-width.html">Full Width Page</a></li>
                <li><a href="sidebar.html">Sidebar Page</a></li>
                <li><a href="faq.html">FAQ</a></li>
                <li><a href="404.html">404</a></li>
                <li><a href="pricing.html">Pricing Table</a></li>
              </ul>
            </li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container -->
    </nav>
    
    <?php echo $content ?>

    <div class="container">

      <hr>

      <footer>
        <div class="row">
          <div class="col-lg-12">
            <p>Copyright &copy; <?php echo date('Y'); ?></p>
          </div>
        </div>
      </footer>

    </div><!-- /.container -->

    <!-- Bootstrap core JavaScript -->
    <!-- Placed at the end of the document so the pages load faster -->
    <?php Yii::app()->clientScript->registerScriptFile('/assets/js/jquery.js'); ?>
    <?php Yii::app()->clientScript->registerScriptFile('/assets/js/bootstrap.js'); ?>
    <?php Yii::app()->clientScript->registerScriptFile('/assets/js/modern-business.js'); ?>
  </body>
</html>
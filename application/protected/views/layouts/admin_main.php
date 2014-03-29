<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo CHtml::encode($this->pageTitle); ?></title>

    <style type="text/css">
        @media (min-width: 975px) {
          body {
              padding-top: 60px;
              padding-bottom: 40px;
          }
        }
    </style>
    <?php Yii::app()->getClientScript()->registerCssFile('/css/admin.css') ?>
</head>
<body >
    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
          </button>
          <a class="brand" href="#">后台管理</a>
          <div class="nav-collapse collapse ">
            <ul class="nav pull-right">
              <li class="active"><a href="<?php echo $this->createUrl('admin/index') ?>">我的面板</a></li>
              <li><a href="<?php echo $this->createUrl('category/admin') ?>">栏目管理</a></li>
              <li><a href="<?php echo $this->createUrl('article/admin') ?>">文章管理</a></li>
              <li><a href="<?php echo $this->createUrl('user/admin') ?>">用户管理</a></li>
              <li><a href="<?php echo $this->createUrl('question/admin') ?>">医生答疑</a></li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-user icon-white"></i> <?php echo Yii::app()->user->name ?> <b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li><a href="#"><i class="icon-cog"></i> Settings</a></li>
                  <li class="divider"></li>
                  <li><a href="<?php echo $this->createUrl('site/logout') ?>"><i class="icon-off"></i> Log Out</a></li>
                </ul>
              </li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>

    <div class="container" id="page">
        <?php echo $content; ?>
        <hr>
        <footer class="text-center">
            Copyright &copy; <?php echo date('Y'); ?> by My Company.<br/>
            All Rights Reserved.<br/>
            <?php echo Yii::powered(); ?>     
        </footer>
    </div>
</body>
</html>
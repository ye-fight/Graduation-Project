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
    <?php Yii::app()->getClientScript()->registerCssFile('/css/admin/sb-admin.css') ?>
</head>

<body>

    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container-fluid">
          <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="brand" href="#">后台管理</a>
          <div class="nav-collapse collapse">
            <ul class="nav">
              <li><?php echo CHtml::link('网站首页', array('site/index'), array('target'=>'_blank')) ?></li>
              <li class="active"><a href="<?php echo $this->createUrl('admin/index') ?>">我的面板</a></li>
              <li><a href="<?php echo $this->createUrl('category/admin') ?>">栏目管理</a></li>
              <li><a href="<?php echo $this->createUrl('article/admin') ?>">文章管理</a></li>
              <li><a href="<?php echo $this->createUrl('user/admin') ?>">用户管理</a></li>
              <li><a href="<?php echo $this->createUrl('question/admin') ?>">医生答疑</a></li>
            </ul>
            <ul class="nav pull-right">
              <li class="dropdown">
                <a href="#" id="drop3" role="button" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-user icon-white"></i> <?php echo Yii::app()->user->name ?><b class="caret"></b></a>
                <ul class="dropdown-menu" role="menu" aria-labelledby="drop3">
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

    <div class="container-fluid">
      <div class="row-fluid">
        <div class="span2">        
          <div class="well well-small sidebar-nav">
            <ul class="nav nav-list">
              <li class="nav-header">文章发布管理</li>
              <li class="active"><?php echo CHtml::link('管理文章', array('article/admin')) ?></li>
              <li><?php echo CHtml::link('栏目管理', array('category/admin')) ?></li>
              <li><?php echo CHtml::link('评论管理', array('comment/admin')) ?></li>
              <li class="nav-header">医生答疑</li>
              <li><?php echo CHtml::link('问题管理', array('question/admin')) ?></li>
              <li class="nav-header">管理员设置</li>
              <li><a href="#">Link</a></li>
              <li><a href="#">Link</a></li>
            </ul>
          </div><!--/.well -->
        </div><!--/span-->
        <div class="span10">
          <?php echo $content ?>
        </div><!--/span-->
      </div><!--/row-->

      <hr>

      <footer>
        <p>© Company 2013</p>
      </footer>

    </div><!--/.fluid-container-->
</body>
<?php
/* @var $this SiteController */
/* @var $error array */

$this->pageTitle='错误 - ' . Yii::app()->name;
$this->breadcrumbs=array(
	'Error',
);
?>

    <div class="container">

      <div class="row">

        <div class="col-lg-12">
          <h1 class="page-header">404 <small>网页不存在</small></h1>
          <ol class="breadcrumb">
		    <li><?php echo CHtml::link('首页', '/') ?></li>
            <li class="active">404</li>
          </ol>
        </div>

      </div>

      <div class="row">

        <div class="col-lg-12">
          <p class="error-404">404</p>
          <p class="lead">无法找到您正在寻找的页面。</p>
          <p>这里有一些有用的链接,帮助你找到你正在寻找什么</p>
          <ul>
            <li><?php echo CHtml::link('关于本站', array('site/about')) ?></li>
            <li><?php echo CHtml::link('推荐资源', array('article/index', 'catid'=>3)) ?></li>
            <li><?php echo CHtml::link('血糖知识', array('article/index', 'catid'=>4)) ?></li>
            <li><?php echo CHtml::link('化验解读', array('site/analyse')) ?></li>
            <li><?php echo CHtml::link('自我评测', array('site/selfTest')) ?></li>
            <li><?php echo CHtml::link('医生答疑', array('site/question')) ?></li>
          </ul>
        </div>

      </div>

    </div><!-- /.container -->
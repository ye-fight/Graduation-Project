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
                <div class="nav-collapse collapse">
                    <ul class="nav">
                        <li class="active"><a href="<?php echo Yii::app()->createUrl('admin/index') ?>">我的面板</a></li>
                        <li><a href="<?php echo Yii::app()->createUrl('category/index') ?>">栏目</a></li>
                        <li><a href="<?php echo Yii::app()->createUrl('article/index') ?>">文章</a></li>
                        <li><a href="<?php echo Yii::app()->createUrl('user/index') ?>">用户管理</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Action</a></li>
                                <li><a href="#">Another action</a></li>
                                <li><a href="#">Something else here</a></li>
                                <li class="divider"></li>
                                <li class="nav-header">Nav header</li>
                                <li><a href="#">Separated link</a></li>
                                <li><a href="#">One more separated link</a></li>
                            </ul>
                        </li>
                    </ul>
                    <form class="navbar-form pull-right">
                        <span><?php echo Yii::app()->user->name ?></span>
                        <a class="btn" href="">登出</a>
                    </form>
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
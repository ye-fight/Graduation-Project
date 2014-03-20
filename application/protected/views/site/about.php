<?php 
  $this->pageTitle = $data->catname;
?>
    <div class="container">

      <div class="row">

        <div class="col-lg-12">
          <h1 class="page-header"><?php echo $data->catname ?> <small><?php echo Yii::app()->name ?></small></h1>
          <ol class="breadcrumb">
            <li><?php echo CHtml::link('首页', '/') ?></li>
            <li class="active"><?php echo $data->catname ?></li>
          </ol>
        </div>

      </div>

      <div class="row">

        <div class="col-md-6">
          <img class="img-responsive" src="http://placehold.it/750x450">
        </div>
        <div class="col-md-6">
          <?php echo $data->description ?>
        </div>

      </div>

      <!-- Team Member Profiles -->

      <div class="row">

        <div class="col-lg-12">
          <h2 class="page-header">参考文献</h2>
        </div>

        <div class="col-sm-3">
        	<img class="img-responsive" src="images/book-1.jpg">
            <h3>糖尿病</h3>
            <p>
              作 者：向红丁，李广智　主编<br>
              出 版 社：中国医药科技出版社<br>
              出版时间：2013-7-1        
            </p>
        </div>
        <div class="col-sm-3">
        	<img class="img-responsive" src="images/book-2.jpg">
            <h3>临床糖尿病学</h3>
            <p>
              作 者：叶山东 主编<br>
              出 版 社：安徽科学技术出版社<br>
              出版时间：2009-7-1
            </p>
        </div>
        <div class="col-sm-3">
        	<img class="img-responsive" src="images/book-3.jpg">
            <h3>中国糖尿病患者胰岛素使用教育管理规范</h3>
            <p>
              作 者：郭晓蕙　主编<br>
              出 版 社：天津科学技术出版社<br>
              出版时间：2011-11-1
            </p>
        </div>
        <div class="col-sm-3">
          <img class="img-responsive" src="images/book-4.jpg">
            <h3>内科学</h3>
            <p>
              作 者：葛均波，徐永健　主编<br>
              出 版 社：人民卫生出版社<br>
              出版时间：2013-3-1
            </p>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-3">
          <img class="img-responsive" src="images/book-5.jpg">
            <h3>健康心理学</h3>
            <p>
              作 者：（美）萨拉裴诺（Sarafino,E.P.） 著，胡佩诚 等译<br>
              出 版 社：中国轻工业出版社<br>
              出版时间：2006-1-1
            </p>
        </div>
        <div class="col-sm-3">
          <img class="img-responsive" src="images/book-6.jpg">
            <h3>临床心理学</h3>
            <p>
              作 者：张理义，严进，刘超　主编<br>
              出 版 社：人民军医出版社<br>
              出版时间：2012-6-1
            </p>
        </div>
        <div class="col-sm-3">
          <img class="img-responsive" src="images/book-7.jpg">
            <h3>实用运动医学</h3>
            <p>
              作 者：曲绵域，于长隆 主编<br>
              出 版 社：北京大学医学出版社<br>
              出版时间：2003-9-1
            </p>
        </div>
        <div class="col-sm-3">
          <img class="img-responsive" src="images/book-8.jpg">
            <h3>大学生健康教育</h3>
            <p>
              作 者：陈天翔　主编<br>
              出 版 社：四川大学出版社<br>
              出版时间：2009-8-1
            </p>
        </div>
      </div>


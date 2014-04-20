<?php 
  $this->pageTitle = '化验解读 - ' . Yii::app()->name;
?>
<div class="container">

  <div class="row">

    <div class="col-lg-12">
      <h1 class="page-header">化验解读</h1>
      <ol class="breadcrumb">
        <li><?php echo CHtml::link('首页', '/') ?></li>
        <li class="active">化验解读</li>
      </ol>
    </div>

  </div>
  <div class="row">
    <div class="col-lg-6">
      <form action="index.php?r=site/analyse" method="post" role="form" class="form-horizontal">
        <div class="form-group">
          <label class="col-sm-4 text-right" for="hplasmaglucose">餐后两小时血糖：</label>
          <div class="col-sm-8 input-group">
            <input class="form-control" type="text" name="hplasmaglucose" id="hplasmaglucose">
            <span class="input-group-addon">mmol/l</span>
          </div>
        </div>
        <div class="form-group">
          <label class="col-sm-4 text-right" for="fpg">空腹血糖：</label>
          <div class="col-sm-8 input-group">
            <input class="form-control" type="text" name="fpg" id="fpg">
            <span class="input-group-addon">mmol/l</span>
          </div>
        </div>
        <div class="form-group">
          <label class="col-sm-4 text-right" for="">HbA1c：</label>
          <div class="col-sm-8 input-group">
            <input class="form-control" type="text" name="hba1c" id="hba1c">
            <span class="input-group-addon">%</span>
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-offset-4 col-sm-8">
            <button type="submit" class="btn btn-default">提交</button>
          </div>
        </div>        
      </form>      
    </div>
    <div class="col-lg-6">
      <?php if (!empty($status)) { ?>
        <blockquote>
          
            <?php if ($status['type']) {
              echo "<h3>您的检测数据显示你的身体状况为：{$status['name']}</h3><hr />";
              echo $status['message'];
            } else {
              echo '<p>输入数据异常，请重新输入</p>';
            } ?>
          
          <small>世界卫生组织糖尿病诊断标准</small>
        </blockquote>
      <?php } ?>
    </div>
  </div>
<!--   <div class="row">
  <div class="col-lg-6">
    <div class="panel panel-default">
      <div class="panel-heading">血糖控制目标</div>
      <table class="table table-bordered table-hover">
        <tr>
          <td></td>
          <td></td>
          <td>理想</td>
          <td>良好</td>
          <td>差</td>
        </tr>
        <tr>
          <td>血糖（mmol/L）</td>
          <td>空腹</td>
          <td>4.4-6.1</td>
          <td>&lt;=7.0</td>
          <td>&gt;7.0</td>
        </tr>
        <tr>
          <td></td>
          <td>非空腹</td>
          <td>4.4-8.0</td>
          <td>&lt;=10.0</td>
          <td>&gt;10.0</td>
        </tr>
        <tr>
          <td>H1bac(%)</td>
          <td></td>
          <td>&lt;6.5</td>
          <td>6.5-7.5</td>
          <td>&gt;7.5</td>
        </tr>
      </table>        
    </div>
  </div>  
  <div class="col-lg-6">
    <div class="panel-group" id="accordion">
      <div class="panel panel-default">
        <div class="panel-heading">
          <h4 class="panel-title">
            <a data-toggle="collapse" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
              血糖(glu)
            </a>
          </h4>
        </div>
        <div id="collapseOne" class="panel-collapse collapse in">
          <div class="panel-body">
            参考值3.89—6.11mmol/L(mmol/L×18=mg/dl)。<br>
            生理性增高见于饭后1—2小时，病理性增高多为胰腺β-细胞损害引起胰岛素激素分泌过多，由颅外伤及颅内出血引起颅内压增高，血糖也可增高，降低见于饥饿及剧烈运动后，胰岛β-细胞增生时胰岛素分泌过多及严重肝病等。
          </div>
        </div>
      </div>
      <div class="panel panel-default">
        <div class="panel-heading">
          <h4 class="panel-title">
            <a data-toggle="collapse" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
              糖化血红蛋白(G—Hb)
            </a>
          </h4>
        </div>
        <div id="collapseTwo" class="panel-collapse collapse">
          <div class="panel-body">
            参考值6.1—7.9% <br>
            糖化血红蛋白Aic(HbAic)是G—Hb主要组成，参考值4.3—6.3%，均用于评定糖尿病控制情况，控制不好结果升高。能反映近1—2月内血糖平均水平，结果不受临床血糖浓度而变化。
          </div>
        </div>
      </div>
      <div class="panel panel-default">
        <div class="panel-heading">
          <h4 class="panel-title">
            <a data-toggle="collapse" data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
              血糖血清蛋白
            </a>
          </h4>
        </div>
        <div id="collapseThree" class="panel-collapse collapse">
          <div class="panel-body">
            参考值1.65—2.15mmol/L, 可反映近1—2周内平均血糖水平
          </div>
        </div>
      </div>
      <div class="panel panel-default">
        <div class="panel-heading">
          <h4 class="panel-title">
            <a data-toggle="collapse" data-toggle="collapse" data-parent="#accordion" href="#collapseFour">
              糖耐量试验（OGTT）
            </a>
          </h4>
        </div>
        <div id="collapseFour" class="panel-collapse collapse">
          <div class="panel-body">
            正常人0.5—1小时高峰值7.7—8.9mmol/L，<br>
            2小时后恢复正常，尿糖阴性。糖尿病者空腹值增高，高峰值更高，恢复时间延长、尿糖阳性。
          </div>
        </div>
      </div>
    </div>
  </div>      
</div> -->
</div>
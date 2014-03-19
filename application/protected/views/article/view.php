<?php
$this->breadcrumbs=array(
	'Articles'=>array('index'),
	$model->title,
);

$this->menu=array(
array('label'=>'文章列表','url'=>array('index')),
array('label'=>'新建文章','url'=>array('create')),
array('label'=>'编辑文章','url'=>array('update','id'=>$model->id)),
array('label'=>'删除文章','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
array('label'=>'文章管理','url'=>array('admin')),
);
?>

<h1>查看文章 #<?php echo $model->id; ?></h1>

<table class="detail-view table table-striped table-condensed" id="yw0">
	<tbody>
		<tr class="odd"><th>文章ID</th><td><?php echo $model->id ?></td></tr>
		<tr class="even"><th>标题</th><td><?php echo $model->title ?></td></tr>
		<tr class="odd"><th>关键字</th><td><?php echo $model->keywords ?></td></tr>
		<tr class="even"><th>描述</th><td><?php echo $model->description ?></td></tr>
		<tr class="odd"><th>创建时间</th><td><?php echo date('Y-m-d', $model->createtime) ?></td></tr>
		<tr class="even"><th>更新时间</th><td><?php echo date('Y-m-d', $model->updatetime) ?></td></tr>
		<tr class="odd"><th>是否显示</th><td><?php echo $model->status ? '是':'否' ?></td></tr>
		<tr class="even"><th>内容</th><td><?php echo $model->content ?></td></tr>
		<tr class="odd"><th>用户</th><td><?php echo $model->user_userid ?></td></tr>
		<tr class="even"><th>栏目</th><td><?php echo $model->category_catid ?></td></tr>
</tbody></table>
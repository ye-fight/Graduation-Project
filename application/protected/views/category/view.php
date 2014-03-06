<?php
$this->breadcrumbs=array(
	'Categories'=>array('index'),
	$model->catid,
);

$this->menu=array(
array('label'=>'栏目列表','url'=>array('index')),
array('label'=>'新建栏目','url'=>array('create')),
array('label'=>'编辑栏目','url'=>array('update','id'=>$model->catid)),
array('label'=>'删除栏目','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->catid),'confirm'=>'Are you sure you want to delete this item?')),
array('label'=>'管理栏目','url'=>array('admin')),
);
?>

<h1>View Category #<?php echo $model->catid; ?></h1>

<table class="detail-view table table-striped table-condensed" id="yw0">
	<tbody>
		<tr class="odd">
			<th>栏目ID</th>
			<td><?php echo $model->catid; ?></td>
		</tr>
		<tr class="even">
			<th>栏目名</th>
			<td><?php echo $model->catname; ?></td>
		</tr>
		<tr class="odd">
			<th>栏目描述</th>
			<td><?php echo $model->description; ?></td>
		</tr>
		<tr class="even">
			<th>文章数</th>
			<td><?php echo $model->items ?></td>
		</tr>
		<tr class="odd">
			<th>单页面</th>
			<td><?php echo $model->is_single ? '是':'否' ?></td>
		</tr>
	</tbody>
</table>


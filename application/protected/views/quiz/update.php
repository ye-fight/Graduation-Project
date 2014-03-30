<ul class="nav nav-tabs">
	<li class="active">
		<a href="#">编辑试题</a>
	</li>
	<li class="pull-right">
		<a href="<?php echo $this->createUrl('quiz/admin') ?>">题目管理</a>
	</li>
</ul>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>
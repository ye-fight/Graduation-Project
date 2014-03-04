<?php /* @var $this Controller */ ?>
<?php $this->beginContent('//layouts/admin_main'); ?>
<div class="row">

	<div class="span3">
		<?php

			$this->beginwidget('zii.widgets.CMenu', array(
				'items'=>$this->menu,
				'htmlOptions'=>array('class'=>'nav nav-list bs-docs-sidenav affix-top'),
				'itemTemplate'=>'<i class="icon-chevron-right"></i>{menu}'
			));
			$this->endWidget();
		?>		
	</div>
	<div class="span9">
		<?php echo $content; ?>
	</div>
</div>
<?php $this->endContent(); ?>
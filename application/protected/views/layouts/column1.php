<?php /* @var $this Controller */ ?>
<?php $this->beginContent('//layouts/sb_admin'); ?>
<ul class="nav nav-tabs">
	<li class="active">
		<a href="#"><?php echo $this->pageTitle ?></a>
	</li>
	<?php 
		if (is_array($this->menu)) {
			foreach ($this->menu as $key => $value) {
				printf('<li class="pull-right">%s</li>', 
					CHtml::link($value['label'], 
						$value['url'], 
						isset($value['linkOptions']) ? $value['linkOptions'] : array()
					)
				);
			}
		}
	?>
</ul>
<?php echo $content; ?>

<?php $this->endContent(); ?>
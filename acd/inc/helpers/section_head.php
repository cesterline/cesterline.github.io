<?php function SectionHead($title, $options = null) { ?>
<?php

	$href = null;
	$close = false;
	$closeHref = '';
	$isHeader = false;
	$configTitle = null;
	$configClass = '';
	
	$headerClass = 'section-head';
	
	if (isset($options) && $options != null) {
		if (isset($options['href'])) {
			$href = $options['href'];
		}
		if (isset($options['close']) && $options['close']) {
			$close = true;
			if (isset($options['closeHref'])) {
				$closeHref = $options['closeHref'];
			} else {
				$closeHref = '#';
			}
		}
		if (isset($options['isHeader']) && $options['isHeader']) {
			$headerClass .= ' section-head-header';
		}
		if (isset($options['configTitle'])) {
			$configTitle = $options['configTitle'];
		}
		if (isset($options['configClass'])) {
			$configClass = $options['configClass'];
		}
	}
	/* Example Usage:
	   <?php SectionHead('Title', array('isHeader' => true, 'close' => true, 'closeHref' => 'customer.php', 'configTitle' => 'Configurable Test Options', 'configClass' => 'modal-link-nc')); ?>
	*/

?>
	
	<div class="<?php echo $headerClass; ?>">
		<?php if($close): ?>
			<div class="pull-right">
				<a href="<?php echo $closeHref; ?>" class="close">&times;</a>
			</div>
		<?php endif; ?>
		<?php if($href): ?>
			<h4 class="pull-left"><a href="<?php echo $href; ?>"><?php echo $title; ?></a></h4>
		<?php else: ?>
			<h4 class="pull-left"><?php echo $title; ?></h4>
		<?php endif; ?>
		<?php if($configTitle): ?>
		<div class="center">
			<a href="#" class="<?php echo $configClass; ?>"><?php echo $configTitle; ?></a>
		</div>
		<?php endif; ?>
		<br>
	</div>

<?php } ?>
<?php function FormInput($title, $options = null) { ?>
<?php

	$type = null;
	$id = '';
	$value = '';
	$addon = null;
	$placeholder = '';
	$groupClass = '';
	$items = array();
	
	if (isset($options) && $options != null) {
		if (isset($options['type'])) {
			$type = $options['type'];
		}
		if (isset($options['id'])) {
			$id = $options['id'];
		}
		if (isset($options['value'])) {
			$value = $options['value'];
		}
		if (isset($options['addon'])) {
			$addon = $options['addon'];
		}
		if (isset($options['placeholder'])) {
			$placeholder = $options['placeholder'];
		}
		if (isset($options['groupClass'])) {
			$groupClass = ' ' . $options['groupClass'];
		}
		if (isset($options['items'])) {
			$items = $options['items'];
		}
		
	}
	/* Example Usage:
	   <?php FormInput('Site Address', array('id' => 'site-address', 'value' => '123 Main St.', 'placeholder' => 'Site Address')); ?>
	*/

?>
	
	<?php if ($type == null || $type == 'text'): ?>
		
		<div class="control-group<?php echo $groupClass; ?>">
			<label class="control-label" for="<?php echo $id; ?>"><?php echo $title; ?></label>
			<div class="controls">
				<?php if($addon): ?><div class="input-append"><?php endif; ?>
				<input type="text" name="" value="<?php echo $value; ?>" id="<?php echo $id; ?>" placeholder="<?php echo $placeholder; ?>"><?php if($addon != null){ echo '<span class="add-on">'.$addon.'</span>'; } ?>
				<?php if($addon): ?></div><?php endif; ?>
			</div>
		</div>
		
	<?php elseif($type == 'select'): ?>
		
		<div class="control-group<?php echo $groupClass; ?>">
			<label class="control-label" for="<?php echo $id; ?>"><?php echo $title ?></label>
			<div class="controls">
				<select id="<?php echo $id ?>">
					<?php print_r($items); ?>
					<?php foreach ($items as $key => $value): ?>
						<option><?php echo $value ?></option>
					<?php endforeach ?>
				</select>
			</div>
		</div>
		
	<?php endif ?>
	
	
	

<?php } ?>
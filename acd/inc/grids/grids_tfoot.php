<?php
	$page = 0;
	$of = 0;
	$items = 0;
	if (isset($pagination)) {
		$page = $pagination['page'];
		$of = $pagination['of'];
		$items = $pagination['items'];
	}
?>

<tfoot>
	<tr>
		<td colspan="12" class="table-footer">
			<form class="total-items">
				<button class="btn" type="submit" title="first page"><i class="icon-fast-backward"></i></button>
				<button class="btn" type="submit" title="previous page"><i class="icon-step-backward"></i></button>
				<span class="small">
					Page <input type="text" name="pagination" value="<?php echo $page ?>" /> of <?php echo $of ?> (<?php echo $items ?> items)
				</span>
				<button class="btn" type="submit" title="next page"><i class="icon-step-forward"></i></button>
				<button class="btn" type="submit" title="last page"><i class="icon-fast-forward"></i></button>
			</form>
		</td>
	</tr>
</tfoot>
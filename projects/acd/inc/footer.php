<?php include('inc/modals.php'); ?>
		</div>
	<footer>
		<div class="container">
			<div class="container-fluid">
			      <div class="row-fluid">
					<div id="legal" class="span11">
						&copy; <?php date_default_timezone_set('UTC'); echo date('Y'); ?> EarthLink, Inc. All rights reserved.  Members and visitors to the EarthLink Business website agree to abide by the <a href="">Conditions of Use</a> including the EarthLink Business <a href="">Privacy Policy</a>.
					</div>
					<div id="btt" class="span1">
						<a href="#" class="pnl-ctrl icon-circle-arrow-up" title="back to top"></a>
					</div>
				</div>
			</div>
		</div>
	</footer>
</body>
<?php include ('inc/scripts.php'); ?>

<script type="text/javascript" charset="utf-8">
	var ELNKIQ = {
		<?php if(isset($page_name)) {
			echo "'page': '".$page_name."'";
		} else {
			echo "'page': 'index'";
		} ?>
	}
</script>
</html>
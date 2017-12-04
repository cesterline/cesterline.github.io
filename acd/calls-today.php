<?php
	require_once('inc/globals.php');
	require_once('inc/helpers/form.php');
	$page_title = 'ACD - Calls Today';
	$site_section = 'callsToday';
	
	include('inc/header.php');
?>

<div class="row-fluid">
	<div class="container-fluid" >
		<div class="row-fluid">
			<div class="span12">
				<div id="calls-today" class="widget">
					<div class="section-head row-fluid">
						<h4 class="pull-left">Calls Today</h4>
						<form action="search" method="get" accept-charset="utf-8" class="form-inline form-horizontal">
							<div class="input-append pull-left grid-filter">
								<div class="btn-group pull-right" style="margin: 0;">
									<button class="btn dropdown-toggle" data-toggle="dropdown"><span class="caret"></span></button>
									<ul class="dropdown-menu">
										<li><a href="javascript:void(0);" class="modal-link-dm"><i class="icon-list pull-right"></i>Preset</a></li>
										<li><a href="javascript:void(0);" class="modal-link-dm"><i class="icon-cog pull-right"></i>Advanced</a></li>
									</ul>
								</div>
								<input class="span2 pull-left grd-fltr" id="appendedDropdownButton" type="text" name="q" value="" placeholder="Filter By" style="width: 300px;">
							</div>							
						</form>
						<div class="btn-group pull-left">
							<a class="btn dropdown-toggle" data-toggle="dropdown" href="#"><i class="icon-list-alt"></i> <span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li class="dropdown-submenu">
									<a tabindex="-1" href="#">Row Count</a>
									<ul class="dropdown-menu">
										<li><a href="javascript:void(0);">8</a></li>
										<li><a href="javascript:void(0);">15</a></li>
										<li><a href="javascript:void(0);">30</a></li>
									</ul>
								</li>
								<li class="divider"></li>
								<li><a href="javascript:void(0);"><i class="icon-refresh pull-right"></i>Refresh</a></li>								
							</ul>
						</div>						
						<div class="btn-group pull-right" title="Manage">
							<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">Manage <span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li><a href="javascript:void(0);" class="modal-link"><i class="icon-comment icon pull-right"></i>Notes</a></li>
								<li><a href="javascript:void(0);" class="modal-link"><i class="icon-tag icon pull-right"></i>Edit Label</a></li>
								<li class="divider"></li>
								<li><a href="javascript:void(0);" class="modal-link"><i class="icon-signal icon pull-right"></i>Chart</a></li>								
							</ul>
						</div>						
						<br />
					</div>
					<?php
						$showGrid = 'calls-today';
						$pagination = array('howMany' => '15', 'page' => '1', 'of' => '20', 'items' => '300');
						include('inc/grids/grids.php');
					?>
				</div>						
			</div>
		</div>
	</div>
</div>

<?php include('inc/footer.php'); ?>
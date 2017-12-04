<?php
	require_once('inc/globals.php');
	require_once('inc/helpers/form.php');
	$page_title = 'ACD - Monitor All';
	$site_section = 'all';
	include('inc/header.php');

?>

<div class="row-fluid">
	<div class="container-fluid">
		<div class="row-fluid">
			<div class="span12">
				<div id="calls" class="widget">
					<div class="section-head row-fluid">
						<h4 class="pull-left">Calls</h4>
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
								<li><a href="javascript:void(0);" class="modal-link"><i class="icon-headphones icon pull-right"></i>Monitor</a></li>
								<li><a href="javascript:void(0);" class="modal-link"><i class="icon-volume-down icon pull-right"></i>Whisper</a></li>
								<li class="divider"></li>
								<li><a href="javascript:void(0);" class="modal-link"><i class="icon-comment icon pull-right"></i>Call Notes</a></li>
								<li><a href="javascript:void(0);" class="modal-link"><i class="icon-list icon pull-right"></i>History</a></li>
								<li class="divider"></li>
								<li><a href="javascript:void(0);" class="modal-link"><i class="icon-signal icon pull-right"></i>Chart</a></li>
								<li><a href="javascript:void(0);" class="modal-link-dm"><i class="icon-download icon pull-right"></i>Download Reports</a></li>
								<li><a href="javascript:void(0);" class="modal-link-dm"><i class="icon-envelope icon pull-right"></i>Emailed Reports</a></li>
								<li><a href="javascript:void(0);" class="modal-link-dm"><i class="icon-edit icon pull-right"></i>Monitored Queues</a></li>
							</ul>
						</div>						
						<br />
					</div>
					<?php
						$showGrid = 'calls';
						$pagination = array('howMany' => '8', 'page' => '1', 'of' => '10', 'items' => '80');
						include('inc/grids/grids.php');
					?>
				</div>				
				<div class="widget">
					<div class="section-head row-fluid">
						<h4 class="pull-left">Agents</h4>
						<form action="search" method="get" accept-charset="utf-8" class="form-inline form-horizontal">
							<div class="input-append pull-left grid-filter">
								<div class="btn-group pull-right" style="margin: 0;">
									<button class="btn dropdown-toggle" data-toggle="dropdown"><span class="caret"></span></button>
									<ul class="dropdown-menu">
										<li class="dropdown-submenu">
											<a tabindex="-1" href="#">Agents</a>
											<ul class="dropdown-menu">
												<li><a href="javascript:void(0);">All</a></li>
												<li><a href="javascript:void(0);">Monitored</a></li>
											</ul>
										</li>
										<li class="divider"></li>
										<li class="dropdown-submenu">
											<a tabindex="-1" href="#">Queues</a>
											<ul class="dropdown-menu">
												<li><a href="javascript:void(0);">All</a></li>
												<li><a href="javascript:void(0);">Queue 1</a></li>
												<li><a href="javascript:void(0);">Queue 2</a></li>
												<li><a href="javascript:void(0);">Queue 3</a></li>
												<li><a href="javascript:void(0);">Queue n</a></li>												
											</ul>
										</li>										
										<li class="divider"></li>
										<li><a href="javascript:void(0);" class="modal-link-dm"><i class="icon-list pull-right"></i>Preset</a></li>
										<li><a href="javascript:void(0);" class="modal-link-dm"><i class="icon-cog pull-right"></i>Advanced</a></li>
									</ul>
								</div>
								<input class="span2 pull-left grd-fltr" id="appendedDropdownButton" type="text" name="q" value="" placeholder="Filter By" style="width: 300px;"></input>
							</div>							
						</form>
						<div id="grid-view" class="btn-group pull-left" title="Select Grid Type">
							<a class="btn dropdown-toggle" data-toggle="dropdown" href="#"><i class="icon-list-alt"></i> <span class="caret"></span></a>
							<ul class="dropdown-menu agent-display">
								<li class="list crnt"><a href="javascript:void(0);"><i class="icon-ok icon-white pull-right"></i>List</a></li>
								<li class="metrics"><a href="javascript:void(0);"><i class="icon-ok icon-white pull-right"></i>Metrics</a></li>
								<li class="combo"><a href="javascript:void(0);"><i class="icon-ok icon-white pull-right"></i>Combo</a></li>
							</ul>
						</div>
						<div class="btn-group pull-right" title="Manage Agents">
							<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">Manage <span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li><a href="javascript:void(0);" class="modal-link"><i class="icon-thumbs-up icon pull-right"></i>Make Ready</a></li>
								<li><a href="javascript:void(0);" class="modal-link"><i class="icon-thumbs-down icon pull-right"></i>Make Busy</a></li>
								<li><a href="javascript:void(0);" class="modal-link"><i class="icon-pencil pull-right"></i>Edit</a></li>
								<li><a href="javascript:void(0);" class="modal-link"><i class="icon-signal icon pull-right"></i>Chart</a></li>
								<li class="divider"></li>
								<li><a href="javascript:void(0);" class="modal-link"><i class="icon-remove icon pull-right"></i>Unmonitor</a></li>
								<li class="divider"></li>
								<li><a href="javascript:void(0);" class="modal-link-dm"><i class="icon-plus icon pull-right"></i>Add Agent</a></li>
								<li class="divider"></li>								
								<li><a href="javascript:void(0);"><i class="icon-list icon pull-right"></i>Busy/Ready Log</a></li>				
							</ul>
						</div>
						<br />
					</div>
					<div class="grid-block gb-list">
					<?php
						$showGrid = 'list';	
						$pagination = array('howMany' => '8', 'page' => '1', 'of' => '10', 'items' => '80');
						include('inc/grids/grids.php');
					?>
					</div>
					<div class="grid-block gb-metrics">
					<?php
						$showGrid = 'metrics';	
						$pagination = array('howMany' => '8', 'page' => '1', 'of' => '10', 'items' => '80');
						include('inc/grids/grids.php');
					?>
					</div>
					<div class="grid-block gb-combo">
					<?php
						$showGrid = 'combo';	
						$pagination = array('howMany' => '8', 'page' => '1', 'of' => '10', 'items' => '80');
						include('inc/grids/grids.php');
					?>
					</div>	
				</div>
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
						$pagination = array('howMany' => '8', 'page' => '1', 'of' => '30', 'items' => '240');
						include('inc/grids/grids.php');
					?>
				</div>				
			</div>
		</div>
	</div>
</div>

<?php include('inc/footer.php'); ?>
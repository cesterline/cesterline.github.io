<?php
$view_selection = ' ';
switch(true)
{
    case ($site_section == 'agents'):
    	$view_selection = ': Agents ';
	break;

    case ($site_section == 'calls'):
    	$view_selection = ': Calls ';
	break;

    case ($site_section == 'callsToday'):
    	$view_selection = ': Calls Today ';
	break;

    case ($site_section == 'all'):
    	$view_selection = ': All ';
	break;
}
?>
<div class="navbar navbar-fixed-top">
	<div class="navbar-inner">
		<div class="container">
			<span class="brand"><a title="Home" href="index.php"><b>ACD</b></a></span>
			<div class="nav-collapse">
				<ul class="nav">
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">View<?php echo $view_selection ?><b class="caret"></b></a>
						<ul class="dropdown-menu view_selection">
							<li<?php if($site_section == 'agents') { echo ' class="crnt"'; } ?>><a href="agents.php" title="Click: to view Agents">Agents</a></li>
							<li<?php if($site_section == 'calls') { echo ' class="crnt"'; } ?>><a href="calls.php" title="Click: to view Calls">Calls</a></li>
							<li<?php if($site_section == 'callsToday') { echo ' class="crnt"'; } ?>><a href="calls-today.php" title="Click: to view Today's Calls">Calls Today</a></li>
							<li class="divider"></li>
							<li<?php if($site_section == 'all') { echo ' class="crnt"'; } ?>><a href="all.php" title="Click: to view all">All</a></li>
						</ul>
					</li>
				</ul>
				<div id="user" class="btn-group pull-right">
					<a class="btn btn-small btn-success dropdown-toggle" data-toggle="dropdown" href="#">
						Name
						<span class="caret"></span>
					</a>
					<ul class="dropdown-menu">
						<li><a href="javascript:void(0);"><i class="blt blt-green pull-right"></i>Ready</a></li>
						<li><a href="javascript:void(0);"><i class="blt blt-red pull-right"></i>Busy</a></li>
						<li><a href="javascript:void(0);"><i class="blt blt-yellow pull-right"></i>Away</a></li>
						<li><a href="javascript:void(0);"><i class="blt pull-right"></i>Offline</a></li>	
						<li class="divider"></li>					
						<li><a class="modal-link-dm" href="javascript:void(0);"><i class="icon-globe icon pull-right"></i>Change Location</a></li>
						<li><a class="modal-link-dm" href="javascript:void(0);"><i class="icon-list icon pull-right"></i>Call Statistics</a></li>
						<li><a class="modal-link-dm" href="javascript:void(0);"><i class="icon-lock icon pull-right"></i>Change Password</a></li>
						<li class="divider"></li>
						<li><a href=""><i class="icon-off icon pull-right"></i>Sign Out</a></li>
					</ul>
				</div>
				<div class="navbar-text status pull-right">
					Status
					<ul>
						<li><a class="modal-link-dm" href="javascript:void(0);" title="Queues Outside SLA (80/20)"><i class="fa fa-clock-o"></i>3</a></li>
						<li><a class="modal-link-dm" href="javascript:void(0);" title="Non-Active Users"><i class="fa fa-user"></i>2</a></li>
						<li><a class="modal-link-dm" href="javascript:void(0);" title="Unanswered Calls"><i class="fa fa-phone"></i>7</a></li>
					</ul>
				</div>					
			</div>
		</div>
	</div>
</div>
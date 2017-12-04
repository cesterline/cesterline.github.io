<?php
	$howMany = 10;
	if (isset($pagination)) {
		$howMany = $pagination['howMany'];
	}
?>

<?php /*======== LIST VIEW =========*/ if($showGrid == 'list'): ?>

		<table class="row-fluid qgrid table table-striped" id="db-mal">
			<thead class="table-header">
				<tr>
					<th class="col-check"><i class="pull-left check"></i></th>
					<th class="agent-name">Agent Name</th>
					<th class="extension">Extension</th>
					<th class="last-call">Last Call</th>
					<th class="phone-status">Phone Status</th>
					<th class="web-status">Web Status</th>
					<th class="paused">Paused</th>
					<th class="calls">Calls Today</th>
					<th class="missed-today">Missed Today</th>	
				</tr>
			</thead>
			<?php include('grids_tfoot.php'); ?>
			<tbody>
				<?php for ($i=0; $i < $howMany; $i++): ?>
					<tr>
						<td class="col-check"><i class="pull-left check"></i></td>
						<td class="agent-name">Agent Name</td>
						<td class="extension">Extension</td>
						<td class="last-call">Last Call</td>
						<td class="phone-status">Phone Status</td>
						<td class="web-status">Web Status</td>
						<td class="paused">Paused</td>
						<td class="calls">Calls Today</td>
						<td class="missed-today">Missed Today</td>						
					</tr>
				<?php endfor; ?>
			</tbody>
		</table>

<?php /*======== METRICS VIEW =========*/ elseif($showGrid == 'metrics'): ?>

		<table class="row-fluid qgrid table table-striped" id="db-mam">
			<thead class="table-header">
				<tr>
					<th class="col-check"><i class="pull-left check"></i></th>
					<th class="agent-name">Agent Name</th>
					<th class="extension">Extension</th>
					<th class="call-metrics">Call Metrics</th>
				</tr>
			</thead>
			<?php include('grids_tfoot.php'); ?>
			<tbody>
				<?php for ($i=0; $i < $howMany; $i++): ?>
					<tr>
						<td class="col-check"><i class="pull-left check"></i></td>
					    <td class="agent-name">Agent Name</td>
						<td class="">Extension</td>
						<td class="col-ctrl">
							<i class="icon-hdd status-eq op50" rel="tooltip"></i>
							<i class="icon-ok status-ps op50" rel="tooltip"></i>
							<i class="icon-book status-sc op50" rel="tooltip"></i>
							<i class="icon-home status-av op50" rel="tooltip"></i>
						</td>
					</tr>
				<?php endfor; ?>
			</tbody>
		</table>

<?php /*======== combo VIEW =========*/ elseif($showGrid == 'combo'): ?>

		<table class="row-fluid qgrid table table-striped-combo combo" id="db-mac">
			<thead class="table-header">
				<tr>
					<th class="col-check"><i class="pull-left check"></i></th>
					<th class="agent-name">Agent Name</th>
					<th class="extension">Extension</th>
					<th class="last-call">Last Call</th>
					<th class="phone-status">Phone Status</th>
					<th class="web-status">Web Status</th>
					<th class="paused">Paused</th>
					<th class="calls">Calls Today</th>
					<th class="missed-today">Missed Today</th>	
				</tr>
			</thead>
			<?php include('grids_tfoot.php'); ?>
			<tbody>
				<?php for ($i=0; $i < $howMany; $i++): ?>
					<tr>
						<td class="col-check"><i class="pull-left check"></i></td>
						<td class="agent-name">Agent Name</td>
						<td class="extension">Extension</td>
						<td class="last-call">Last Call</td>
						<td class="phone-status">Phone Status</td>
						<td class="web-status">Web Status</td>
						<td class="paused">Paused</td>
						<td class="calls">Calls Today</td>
						<td class="missed-today">Missed Today</td>						
					</tr>
					<tr>
						<td>&nbsp;</td>
						<td class="col-ctrl" colspan="8">
							<i class="icon-hdd status-eq op50" rel="tooltip"></i>
							<i class="icon-ok status-ps op50" rel="tooltip"></i>
							<i class="icon-book status-sc op50" rel="tooltip"></i>
							<i class="icon-home status-av op50" rel="tooltip"></i>
						</td>
					</tr>
				<?php endfor; ?>
			</tbody>
		</table>

<?php /*======== CALLS TODAY =========*/ elseif($showGrid == 'calls-today'): ?>

		<table class="row-fluid qgrid table table-striped" id="db-ct">
			<thead class="table-header">
				<tr>
					<th class="col-check"><i class="pull-left check"></i></th>
					<th class="answer-time">Agent Time</th>
					<th class="queue">Queue</th>
					<th class="custom-label">Custom Label</th>
				</tr>
			</thead>
			<?php include('grids_tfoot.php'); ?>
			<tbody>
				<?php for ($i=0; $i < $howMany; $i++): ?>
					<tr>
						<td class="col-check"><i class="pull-left check"></i></td>
						<td class="answer-time">Agent Time</td>
						<td class="queue">Queue</td>
						<td class="custom-label">Custom Label</td>
					</tr>
				<?php endfor; ?>
			</tbody>
		</table>		

<?php /*======== CALLS =========*/ elseif($showGrid == 'calls'): ?>

		<table class="row-fluid qgrid table table-striped" id="db-c">
			<thead class="table-header">
				<tr>
					<th class="col-check"><i class="pull-left check"></i></th>
					<th class="">Call ID</th>
					<th class="">Status</th>
					<th class="">Call Date</th>
					<th class="">Answer Time</th>
					<th class="">Hold Time</th>
					<th class="">Talk Time</th>
					<th class="">ANI</th>
					<th class="">Label</th>
					<th class="">DNIS</th>
					<th class="">Name</th>
					<th class="">Queue</th>
				</tr>
			</thead>
			<?php include('grids_tfoot.php'); ?>
			<tbody>
				<?php for ($i=0; $i < $howMany; $i++): ?>
					<tr>
						<td class="col-check"><i class="pull-left check"></i></td>
						<td class="">Call ID</td>
						<td class="">Status</td>
						<td class="">Call Date</td>
						<td class="">Answer Time</td>
						<td class="">Hold Time</td>
						<td class="">Talk Time</td>
						<td class="">ANI</td>
						<td class="">Label</td>
						<td class="">DNIS</td>
						<td class="">Name</td>
						<td class="">Queue</td>
					</tr>
				<?php endfor; ?>
			</tbody>
		</table>

<?php endif; ?>
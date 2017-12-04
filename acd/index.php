<?php
	require_once('inc/globals.php');
	require_once('inc/helpers/form.php');
	$page_title = 'ACD';
	$site_section = 'home';
	include('inc/header.php');

?>

<div class="container" id="dashboard">
    <div class="row">
        <div class="span6">
            <div class="widget">
                <div class="section-head">
                    <h4 class="pull-left">Number of Active Calls</h4>
                    <div class="pull-right">
                        <a href="javascript:void(0);" class="pnl-ctrl modal-link-dm" title="configure"><i class="icon-cog"></i></a>
                    </div>                    
                    <br />
                </div>
                <div id="chart4"></div>
            </div>
        </div>
        <div class="span6">
            <div class="widget">
                <div class="section-head">
                    <h4 class="pull-left">Time to Answer (all Queues)</h4>
                    <div class="pull-right">
                        <a href="javascript:void(0);" class="pnl-ctrl modal-link-dm" title="configure"><i class="icon-cog"></i></a>
                    </div>                    
                    <br />
                </div>
                <div id="chart2"></div>                
            </div>
        </div>
    </div>
    <div class="row">
        <div class="span12">
            <div class="widget">
                <div class="section-head">
                    <h4 class="pull-left">Average Wait Time</h4>
                    <div class="pull-right">
                        <a href="javascript:void(0);" class="pnl-ctrl modal-link-dm" title="configure"><i class="icon-cog"></i></a>
                    </div>                    
                    <br />
                </div>
                <div id="chart1"></div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="span6">
            <div class="widget">
                <div class="section-head">
                    <h4 class="pull-left">Unanswered Queue Volume</h4>
                    <div class="pull-right">
                        <a href="javascript:void(0);" class="pnl-ctrl modal-link-dm" title="configure"><i class="icon-cog"></i></a>
                    </div>                    
                    <br />
                </div>
                <div id="chart5"></div>
            </div>
        </div>
        <div class="span6">
            <div class="widget">
                <div class="section-head">
                    <h4 class="pull-left">Queue Abandonment Rate</h4>
                    <div class="pull-right">
                        <a href="javascript:void(0);" class="pnl-ctrl modal-link-dm" title="configure"><i class="icon-cog"></i></a>
                    </div>                    
                    <br />
                </div>
                <div id="chart3"></div>
            </div>
        </div>
    </div>                 
</div>

<?php include('inc/footer.php'); ?>
/* ONLOAD */
$(document).ready(function() {

	/* Grid View, prevent link if crnt */
	$('#grid-view li.crnt a').attr('href', 'javascript:void(0);');
	
	/* quickly written, could be short-handed */
	$(".qgrid.combo tr:nth-child(odd)").hover(function() {
		$(this).find('td').addClass('hl');
		$(this).next('tr').find('td').addClass('hl');
	}, function() {
		$(this).find('td').removeClass('hl');
		$(this).next('tr').find('td').removeClass('hl');
	});
	
	$(".qgrid.combo tr:nth-child(even)").hover(function() {
		$(this).find('td').addClass('hl');
		$(this).prev('tr').find('td').addClass('hl');
	}, function() {
		$(this).find('td').removeClass('hl');
		$(this).prev('tr').find('td').removeClass('hl');
	});

	/* descr */
	$('.qgrid tbody tr').each(function(){
		$(this).find('td:not(:first)').click(function(e){
			e.preventDefault();
			// document.location = '';
		});
	});

	/* My Agent Display Feature */
	$(".grid-block").hide();
	$(".grid-block").filter(".gb-list").show();
   	$('.agent-display li').click(function() {
		if ($(this).hasClass('adEx')) {
			e.preventDefault();
		} else {
			$(this).each(function(){
				$(".grid-block").hide();
			    if($(this).hasClass('list') == true) {
					$(".grid-block").filter(".gb-list").show();
			    } else if($(this).hasClass('metrics') == true) {
					$(".grid-block").filter(".gb-metrics").show();
			    } else if($(this).hasClass('combo') == true) {
					$(".grid-block").filter(".gb-combo").show();
			    };
			});	     
		    if($(this).hasClass('crnt') == true) {
		        $(this).removeClass('crnt');
		    }
		    else {
		        $('li.crnt').removeClass('crnt');
		        $(this).addClass('crnt');
		    };
		};
	});

	/* descr */
	$('thead .check').click(function(){
		var crnt = $(this).closest('table').attr("id");
		if ($(this).hasClass('check-on')) {
			$('.check').each(function(){
				$(this).removeClass('check-on');
			});
			$('#' + crnt + ' tbody .check').each(function(){
				$(this).removeClass('check-on');
			});
		} else {
			$('.check').each(function(){
				$(this).removeClass('check-on');
			});			
			$(this).addClass('check-on');
			$('#' + crnt + ' tbody .check').each(function(){
				$(this).addClass('check-on');
			});
		};
	});
	
	/* descr */
	$('tbody .check').click(function(){
		if ($(this).hasClass('check-on')) {
			$(this).removeClass('check-on');
		} else {
			$(this).addClass('check-on');
		};
	});
	
	/* descr */
	$('.modal-link').click(function(e){
		if ($('tbody .check-on').size() > 0) {
			e.preventDefault();
			$('#mr-modal').modal();
			$('.modal-count').text($('tbody .check-on').size());
		} else {
			e.preventDefault();
			alert('please select one or more rows to configure')
		};
	});

	/* descr */
	$('.modal-link-dm').click(function(e){
		e.preventDefault();
		$('#dm-modal').modal();
	});	

	/* descr */
	$('.modal-adv-filter').click(function(e){
		e.preventDefault();
		$('#filter-modal').modal();
	});

	/*
	$('a.modal-action').live('keypress', function(e) {
	    if (e.keyCode == 13) {
	        $(this).submit();
	    }
	});
	$(".status ul li a").hover(function() {
		$(this).find('i').addClass('status-hover');
	}, function() {
		$(this).find('i').removeClass('status-hover');
	}); 
    */	
});


/* GOOGLE CHARTS */
function drawCharts() {
 	/* chart 1 */
    var data1 = google.visualization.arrayToDataTable([
		['Queue', 'Time(m)'],
		['Queue 001',   15],
		['Queue 002',     10],
		['Queue 003',    5],		
		['Queue 004',   2.5]
    ]);
    var options1 = {
	    legend:'none',       	
		backgroundColor: 'transparent',
	    colors: ['orange']
    }; 	

    /* chart 2 */
    var data2 = google.visualization.arrayToDataTable([
    	['Agent', 'Avg Answer Time(s)'],
    	['Bob', 5],
    	['Andy', 6],
    	['Sal', 7.5],
    	['Sandy', 11.25],
    	['Jill', 12], 
    	['Wayne', 11], 
    	['Joe', 12], 
    	['Robbi', 15.5], 
    	['Chris', 15.25],
    	['Phil', 15],
    	['Amy', 16],
    	['Karl', 17.75],
    	['Pam', 19],    	
    	['Hans', 21],
    	['Mark', 22],    	    	
    	['Christina', 23],    	    	    	    	     	    	    	    	   	    	    	
    	['Cindy', 25]]);

    var options2 = {
    	legend:'none',
	    colors: ['#3266cc'],    	
    	histogram: { bucketSize: 5 }
    };

    /* chart 3 */
    var data3 = google.visualization.arrayToDataTable([
		['Queue', 'Rate of Abandonment'],
		['Queue 001',   22],
		['Queue 002',     11],
		['Queue 003',   5],		
		['Queue 004',    2]
    ]);
    var options3 = {
	    legend:'none',    	
		backgroundColor: 'transparent',
	    colors: ['#aaaaaa'],		
		vAxis: {title: '%',  titleTextStyle: {color: 'red'}}
    }; 

    /* chart 4 */
    var data4 = google.visualization.arrayToDataTable([
    	['Genre', 'On Hold', 'Active', { role: 'annotation' } ],
    	['Queue 001',  28, 79, ''],
    	['Queue 002',  16, 52, ''],
    	['Queue 003',  10, 44, ''],
    	['Queue 004',   4, 12, ''],
    	['All Queues', 58, 187, '']
    	]);

    var options4 = {
	    legend:'none',
    	isStacked: true,
	    colors: ['#dc3812', '#3266cc']
    };

	/* chart 5 */
    var data5 = google.visualization.arrayToDataTable([
		['Queue', '# of Unanswered Calls'],
		['Queue 001',   57],
		['Queue 002',     30],
		['Queue 003',   22],		
		['Queue 004',    11]
    ]);
    var options5 = {
	    legend:'none',    	
		backgroundColor: 'transparent',
	    colors: ['#dc3812']
    }; 	

    /* chart initialization */
    var chart1 = new google.visualization.BarChart(document.getElementById('chart1'));
    chart1.draw(data1, options1); 

    var chart2 = new google.visualization.Histogram(document.getElementById('chart2'));
    chart2.draw(data2, options2);

    var chart3 = new google.visualization.ColumnChart(document.getElementById('chart3'));
    chart3.draw(data3, options3);

    var chart4 = new google.visualization.BarChart(document.getElementById('chart4'));
    chart4.draw(data4, options4);

    var chart5 = new google.visualization.ColumnChart(document.getElementById('chart5'));
    chart5.draw(data5, options5);

}

google.setOnLoadCallback(drawCharts);
google.load("visualization", "1", { packages: ["corechart"] });

$(window).on("throttledresize", function (event) {
	drawCharts()
});
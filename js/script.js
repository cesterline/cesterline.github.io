$(document).ready(function() {

	// open (or close) submenu items in OC Menu. Close all the other open submenu items.
	$(function() {
		$('.with-subs').children('a.submenu-open').next('.oc-menu-tier-2').slideToggle(200).end().parent('.with-subs').siblings('.with-subs').children('a').removeClass('submenu-open').next('.oc-menu-tier-2').slideUp(200);
		$('.with-subs').children('a').on('click', function(event){
			event.preventDefault();
			$(this).toggleClass('submenu-open').next('.oc-menu-tier-2').slideToggle(200).end().parent('.with-subs').siblings('.with-subs').children('a').removeClass('submenu-open').next('.oc-menu-tier-2').slideUp(200);
		});
	});


	// part 1 - screen width test - remove off canvas nav if greater than 991px
	updateContainer();
	$(window).resize(function() {
		updateContainer();
	});

	// prevent loading link's which are labeled crnt
	$(".crnt").on('click',function(e) {
		e.preventDefault();
	});


	// select all checkboxes when checkbox in datagrid is selected
	$('thead input:checkbox').click(function(e){
		var table= $(e.target).closest('table');
		$('td input:checkbox',table).prop('checked',this.checked);
	});


	// defines margin for panel ftr select descr
	$(".pnl-ftr select").parent("div").css("margin-left", "8px");


	// setting default values of disabled fields for purpose of demo only
	$("#df-1").val("555-555-1212");
	$("#df-2").val("email@domain.com");


	// devide up space alotted to ul.nav-tabs and distribute to nested li's
	// currently using bootstrap supplied class 'nav-justified' in place of below function
	/*
	$(function() {
		var mTab = $("ul.nav-tabs li");
		var total = $(mTab).length;
		var width = Math.floor(100 / total);
		$(mTab).css('width', width + "%");
		if (total == 3) {
			$(mTab).eq(1).css('width', "34%");
		}
	});
	*/

});


// part 2 - screen width test - remove off canvas nav if greater than 991px
function updateContainer() {
	var container = document.getElementById( 'oc-container' )
	var $containerWidth = $(window).width();
	if ($containerWidth > 991) {
		classie.remove( container, 'oc-nav-open' );
	}
}

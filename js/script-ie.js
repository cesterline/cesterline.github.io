$(document).ready(function() {
	/* solve for ie8's lack of support for pseudo selectors */
	$('.lt-ie9 #utility > .inline-list > ul > li:last-child').css({ "border-right-width": "1px", "margin-right": "0" });
	$('.lt-ie9 #channels .btn-group:last-of-type').css({ "background": "none" });
	$('.lt-ie9 #legal > ul > li:last-child').css({ "padding-right": "0", "margin-right": "0" });
	$('.lt-ie9 .table-striped > tbody > tr:nth-of-type(odd)').css({ "background-color": "#f9f9f9" });

	/* adds support for placeholder in ie8/9 */
	$('.no-label[placeholder]').focus(function() {
		var input = $(this);
		if (input.val() == input.attr('placeholder')) {
			input.val('');
			input.removeClass('placeholder');
		}
	}).blur(function() {
		var input = $(this);
		if (input.val() == '' || input.val() == input.attr('placeholder')) {
			input.addClass('placeholder');
			input.val(input.attr('placeholder'));
		}
	}).blur().parents('form').submit(function() {
		$(this).find('[placeholder]').each(function() {
			var input = $(this);
			if (input.val() == input.attr('placeholder')) {
				input.val('');
			}
		})
	});

});
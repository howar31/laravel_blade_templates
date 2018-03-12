$(document).ready(function() {
	$('.btn-toggle-sidebar').click(function() {
		$('body').toggleClass('smallscreen');
		$('body').addClass('forced');
	});

	$('.sidebar-item').click(function() {
		$('.sidebar-item.active').removeClass('active');
		$(this).addClass('active');
	});

	$('.sidebar-group-title').click(function() {
		$(this).siblings('.sidebar-group-content').slideToggle('400', function () {
			$(this).parent('.sidebar-group').toggleClass('expanded');
		});
	});

	// Responsive design
	checkSize();
	$(window).resize(checkSize);

	$('.sidebar-item.active').parent('.sidebar-group-content').siblings('.sidebar-group-title').trigger('click');
});

/**
 * Check window size for responsive design
 * @return {null} no return
 */
function checkSize() {
	if (! $('body').hasClass('forced')) {
		if ($(window).width() > 767) {
			$('body').removeClass('smallscreen');
		} else {
			$('body').addClass('smallscreen');
		}
	}
}
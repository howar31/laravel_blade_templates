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
		$(this).siblings('ul').slideToggle();
		$(this).toggleClass('expanded');
	});

	// Responsive design
	checkSize();
	$(window).resize(checkSize);
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
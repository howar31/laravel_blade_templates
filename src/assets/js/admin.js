$(document).ready(function() {
	$('.btn-toggle-sidebar').click(function() {
		$('body').toggleClass('smallscreen');
		$('body').addClass('forced');
		changeSize();
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

	// Activate tooltips
	addSidebarTooltips();
	$('body').tooltip({
		selector: '[data-toggle="tooltip"]'
	});

	// Responsive design
	changeSize();
	$(window).resize(changeSize);

	// Expand sidebar parents if child is active
	$('.sidebar-item.active').parent('.sidebar-group-content').siblings('.sidebar-group-title').trigger('click');
});

// Check window size and change design for responsive
function changeSize () {
	// Avoid if forced button clicked
	if (! $('body').hasClass('forced')) {
		if ($(window).width() > 767) {
			$('body').removeClass('smallscreen');
		} else {
			$('body').addClass('smallscreen');
		}
	}

	// Always do with width change
	toggleSidebarTooltips();
}

// Append tooltips to sidebar items
function addSidebarTooltips () {
	$('.sidebar-group > a')
		.attr('data-toggle', 'tooltip')
		.attr('data-placement', 'right')
		.attr('data-html', 'true')
		.each(function () {
			$(this).prop('title', $(this).text() + ' <i class="fas fa-angle-down"></i>');
		});

	$('.sidebar-item > a')
		.attr('data-toggle', 'tooltip')
		.attr('data-placement', 'right')
		.attr('data-html', 'true')
		.each(function () {
			$(this).prop('title', $(this).text());
		});
}

function toggleSidebarTooltips () {
	$('.sidebar-item > a[data-toggle="tooltip"], .sidebar-group > a[data-toggle="tooltip"]').tooltip($('body').hasClass('smallscreen') ? 'enable' : 'disable');
}
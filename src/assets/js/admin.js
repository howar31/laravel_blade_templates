$(document).ready(function() {
	$('.btn-toggle-sidebar').click(function() {
		$('body').toggleClass('smallscreen');
		$('body').addClass('forced');
		changeDisplayMode();
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
	changeDisplayMode();
	$(window).resize(changeDisplayMode);

	// Expand sidebar parents if child is active
	$('.sidebar-item.active').parent('.sidebar-group-content').siblings('.sidebar-group-title').trigger('click');

	$('body').tooltip({
		selector: '[data-toggle="tooltip"]',
		container: 'body',
		boundary: 'viewport',
		trigger : 'hover',
		html: true,
	});
});

// Check window size and change design for responsive
function changeDisplayMode () {
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
	$('.sidebar-group > a').each(function () {
		$(this).tooltip({
			container: 'body',
			boundary: 'viewport',
			placement: 'right',
			trigger : 'hover',
			html: true,
			title: $(this).text() + ' <i class="fas fa-angle-down"></i>',
		})
	});

	$('.sidebar-item > a').each(function () {
		$(this).tooltip({
			container: 'body',
			boundary: 'viewport',
			placement: 'right',
			trigger : 'hover',
			title: $(this).text(),
		})
	});

	$('.sidebar-group > a, .sidebar-item > a').on('show.bs.tooltip', function () {
		$('.tooltip').not(this).remove();
	});
}

// Only show sidebar tooltips in smallscreen mode
function toggleSidebarTooltips () {
	$('.sidebar-item > a, .sidebar-group > a').tooltip($('body').hasClass('smallscreen') ? 'enable' : 'disable');
}
<?php

// Sidebar Config Example
//	[	// Sidebar menu item
//		"text" => "",	// Text to display for sidebar menu item
//		"icon" => "",	// FontAwesome icon class
//		"badge" => "",	// Badge text
//		"url" => "",	// [Exclusive for Item]  URL for the sidebar menu item
//		"current_page" => ""	// [Exclusive for Item] Page ID used for active highlight (set in section)
//	],
//	[	// Sidebar menu group
//		"text" => "",	// Text to display for sidebar menu group title
//		"icon" => "",	// FontAwesome icon class
//		"badge" => "",	// Badge text
//		"children" => [	// Sidebar menu group wrap
//			[	// Sidebar sub-menu item
//				"text" => "",	// Text to display for sidebar menu item
//				"icon" => "",	// FontAwesome icon class
//				"badge" => "",	// Badge text
//				"url" => "",	// [Exclusive for Item]  URL for the sidebar menu item
//				"current_page" => ""	// [Exclusive for Item] Page ID used for active highlight (set in section)
//			]
//		]
//	]

return [
	[
		"text" => "Overview",
		"icon" => "fas fa-home",
		"badge" => "HOME",
		"url" => "admin/overview",
		"current_page" => "overview"
	],
	[
		"text" => "Dashboard",
		"icon" => "fas fa-clipboard-list",
		"badge" => "",
		"url" => "admin/dashboard",
		"current_page" => "dashboard"
	],
	[
		"text" => "UI Components",
		"icon" => "fas fa-magic",
		"badge" => "",
		"children" => [
			[
				"text" => "Alerts",
				"icon" => "fas fa-exclamation",
				"badge" => "",
				"url" => "admin/ui/alert",
				"current_page" => "alert"
			],
			[
				"text" => "Buttons",
				"icon" => "fas fa-keyboard",
				"badge" => "",
				"url" => "admin/ui/button",
				"current_page" => "button"
			],
			[
				"text" => "Grids",
				"icon" => "fas fa-th-large",
				"badge" => "",
				"url" => "admin/ui/grid",
				"current_page" => "grid"
			],
			[
				"text" => "Modals",
				"icon" => "fas fa-window-restore",
				"badge" => "",
				"url" => "admin/ui/modal",
				"current_page" => "modal"
			],
			[
				"text" => "Tables",
				"icon" => "fas fa-table",
				"badge" => "",
				"url" => "admin/ui/table",
				"current_page" => "table"
			],
			[
				"text" => "Toasts",
				"icon" => "fas fa-bell",
				"badge" => "",
				"url" => "admin/ui/toast",
				"current_page" => "toast"
			],
			[
				"text" => "Panels",
				"icon" => "fas fa-window-maximize",
				"badge" => "",
				"url" => "admin/ui/panel",
				"current_page" => "panel"
			],
			[
				"text" => "Progress Bar",
				"icon" => "fas fa-spinner",
				"badge" => "",
				"url" => "admin/ui/progressbar",
				"current_page" => "progressbar"
			],
			[
				"text" => "Typography",
				"icon" => "fas fa-at",
				"badge" => "",
				"url" => "admin/ui/typography",
				"current_page" => "typography"
			]
		]
	],
	[
		"text" => "Forms",
		"icon" => "fab fa-wpforms",
		"badge" => "",
		"children" => [
			[
				"text" => "Login",
				"icon" => "fas fa-sign-in-alt",
				"badge" => "",
				"url" => "admin/form/login",
				"current_page" => "login"
			]
		]
	],
	[
		"text" => "Charts",
		"icon" => "fas fa-chart-line",
		"badge" => "",
		"children" => [
			[
				"text" => "General",
				"icon" => "fas fa-chart-pie",
				"badge" => "",
				"url" => "admin/chart/general",
				"current_page" => "general"
			]
		]
	],
	[
		"text" => "About",
		"icon" => "fas fa-pencil-alt",
		"badge" => "",
		"children" => [
			[
				"text" => "Laravel Blade Templates",
				"icon" => "fab fa-laravel",
				"badge" => "",
				"url" => "admin/about/template",
				"current_page" => "template"
			],
			[
				"text" => "Author",
				"icon" => "fas fa-user",
				"badge" => "",
				"url" => "admin/about/author",
				"current_page" => "author"
			]
		]
	]
];

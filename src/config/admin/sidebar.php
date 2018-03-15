<?php

// Sidebar Config Example
//	[	// Sidebar menu item
//		"text" => "",	// Text to display for sidebar menu item
//		"icon" => "",	// FontAwesome icon class
//		"url" => "",	// [Exclusive for Item]  URL for the sidebar menu item
//		"current_page" => ""	// [Exclusive for Item] Page ID used for active highlight (set in section)
//	],
//	[	// Sidebar menu group
//		"text" => "",	// Text to display for sidebar menu group title
//		"icon" => "",	// FontAwesome icon class
//		"children" => [	// Sidebar menu group wrap
//			[	// Sidebar sub-menu item
//				"text" => "",	// Text to display for sidebar menu item
//				"icon" => "",	// FontAwesome icon class
//				"url" => "",	// [Exclusive for Item]  URL for the sidebar menu item
//				"current_page" => ""	// [Exclusive for Item] Page ID used for active highlight (set in section)
//			]
//		]
//	]

return [
	[
		"text" => "Overview",
		"icon" => "fas fa-home",
		"url" => "admin/overview",
		"current_page" => "overview"
	],
	[
		"text" => "Dashboard",
		"icon" => "fas fa-clipboard-list",
		"url" => "admin/dashboard",
		"current_page" => "dashboard"
	],
	[
		"text" => "UI Components",
		"icon" => "fas fa-magic",
		"children" => [
			[
				"text" => "Alerts",
				"icon" => "fas fa-exclamation",
				"url" => "admin/ui/alert",
				"current_page" => "alert"
			],
			[
				"text" => "Buttons",
				"icon" => "fas fa-keyboard",
				"url" => "admin/ui/button",
				"current_page" => "button"
			],
			[
				"text" => "Grids",
				"icon" => "fas fa-th-large",
				"url" => "admin/ui/grid",
				"current_page" => "grid"
			],
			[
				"text" => "Modals",
				"icon" => "fas fa-window-restore",
				"url" => "admin/ui/modal",
				"current_page" => "modal"
			],
			[
				"text" => "Tables",
				"icon" => "fas fa-table",
				"url" => "admin/ui/table",
				"current_page" => "table"
			],
			[
				"text" => "Toasts",
				"icon" => "fas fa-bell",
				"url" => "admin/ui/toast",
				"current_page" => "toast"
			],
			[
				"text" => "Panels",
				"icon" => "fas fa-window-maximize",
				"url" => "admin/ui/panel",
				"current_page" => "panel"
			],
			[
				"text" => "Progress Bar",
				"icon" => "fas fa-spinner",
				"url" => "admin/ui/progressbar",
				"current_page" => "progressbar"
			],
			[
				"text" => "Typography",
				"icon" => "fas fa-at",
				"url" => "admin/ui/typography",
				"current_page" => "typography"
			]
		]
	],
	[
		"text" => "Forms",
		"icon" => "fab fa-wpforms",
		"children" => [
			[
				"text" => "Login",
				"icon" => "fas fa-sign-in-alt",
				"url" => "admin/form/login",
				"current_page" => "login"
			]
		]
	],
	[
		"text" => "Charts",
		"icon" => "",
		"children" => [
			[
				"text" => "General",
				"icon" => "fas fa-chart-pie",
				"url" => "admin/chart/general",
				"current_page" => "general"
			]
		]
	],
	[
		"text" => "About",
		"icon" => "fas fa-pencil-alt",
		"children" => [
			[
				"text" => "Laravel Blade Templates",
				"icon" => "fab fa-laravel",
				"url" => "admin/about/template",
				"current_page" => "template"
			],
			[
				"text" => "Author",
				"icon" => "fas fa-user",
				"url" => "admin/about/author",
				"current_page" => "author"
			]
		]
	]
];

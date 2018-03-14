<div id="sidebar">
	<div id="sidebar-wrap">
		<ul>
			<li class="sidebar-item{{ ('overview' == $current_page) ? ' active' : '' }}">
				<a href="{{ url('admin/overview') }}">
					<i class="fas fa-home"></i> Overview
				</a>
			</li>
			<li class="sidebar-item{{ ('dashboard' == $current_page) ? ' active' : '' }}">
				<a href="{{ url('admin/dashboard') }}">
					<i class="fas fa-clipboard-list"></i> Dashboard
				</a>
			</li>
			<li class="sidebar-group">
				<a class="sidebar-group-title" href="javascript:void(0);">
					<span class="group-arrow pull-right"><i class="fas fa-angle-down"></i></span>
					<i class="fas fa-magic"></i> UI Components
				</a>
				<ul class="sidebar-group-content">
					<li class="sidebar-item{{ ('alert' == $current_page) ? ' active' : '' }}">
						<a href="{{ url('admin/ui/alert') }}">
							<i class="fas fa-exclamation"></i> Alerts
						</a>
					</li>
					<li class="sidebar-item{{ ('button' == $current_page) ? ' active' : '' }}">
						<a href="{{ url('admin/ui/button') }}">
							<i class="fas fa-keyboard"></i> Buttons
						</a>
					</li>
					<li class="sidebar-item{{ ('grid' == $current_page) ? ' active' : '' }}">
						<a href="{{ url('admin/ui/grid') }}">
							<i class="fas fa-th-large"></i> Grids
						</a>
					</li>
					<li class="sidebar-item{{ ('modal' == $current_page) ? ' active' : '' }}">
						<a href="{{ url('admin/ui/modal') }}">
							<i class="fas fa-window-restore"></i> Modals
						</a>
					</li>
					<li class="sidebar-item{{ ('table' == $current_page) ? ' active' : '' }}">
						<a href="{{ url('admin/ui/table') }}">
							<i class="fas fa-table"></i> Tables
						</a>
					</li>
					<li class="sidebar-item{{ ('toast' == $current_page) ? ' active' : '' }}">
						<a href="{{ url('admin/ui/toast') }}">
							<i class="fas fa-bell"></i> Toasts
						</a>
					</li>
					<li class="sidebar-item{{ ('panel' == $current_page) ? ' active' : '' }}">
						<a href="{{ url('admin/ui/panel') }}">
							<i class="fas fa-window-maximize"></i> Panels
						</a>
					</li>
					<li class="sidebar-item{{ ('progressbar' == $current_page) ? ' active' : '' }}">
						<a href="{{ url('admin/ui/progressbar') }}">
							<i class="fas fa-spinner"></i> Progress Bars
						</a>
					</li>
					<li class="sidebar-item{{ ('typography' == $current_page) ? ' active' : '' }}">
						<a href="{{ url('admin/ui/typography') }}">
							<i class="fas fa-at"></i> Typography
						</a>
					</li>
				</ul>
			</li>
			<li class="sidebar-group">
				<a class="sidebar-group-title" href="javascript:void(0);">
					<span class="group-arrow pull-right"><i class="fas fa-angle-down"></i></span>
					<i class="fab fa-wpforms"></i> Forms
				</a>
				<ul class="sidebar-group-content">
					<li class="sidebar-item{{ ('login' == $current_page) ? ' active' : '' }}">
						<a href="{{ url('admin/form/login') }}">
							<i class="fas fa-sign-in-alt"></i> Login
						</a>
					</li>
				</ul>
			</li>
			<li class="sidebar-group">
				<a class="sidebar-group-title" href="javascript:void(0);">
					<span class="group-arrow pull-right"><i class="fas fa-angle-down"></i></span>
					<i class="fas fa-chart-line"></i> Charts
				</a>
				<ul class="sidebar-group-content">
					<li class="sidebar-item{{ ('general' == $current_page) ? ' active' : '' }}">
						<a href="{{ url('admin/chart/general') }}">
							<i class="fas fa-chart-pie"></i> General
						</a>
					</li>
				</ul>
			</li>
			<li class="sidebar-group">
				<a class="sidebar-group-title" href="javascript:void(0);">
					<span class="group-arrow pull-right"><i class="fas fa-angle-down"></i></span>
					<i class="fas fa-pencil-alt"></i> About
				</a>
				<ul class="sidebar-group-content">
					<li class="sidebar-item{{ ('template' == $current_page) ? ' active' : '' }}">
						<a href="{{ url('admin/about/template') }}">
							<i class="fab fa-laravel"></i> Laravel Blade Templates
						</a>
					</li>
					<li class="sidebar-item{{ ('author' == $current_page) ? ' active' : '' }}">
						<a href="{{ url('admin/about/author') }}">
							<i class="fas fa-user"></i> Author
						</a>
					</li>
				</ul>
			</li>
		</ul>
	</div>
</div>


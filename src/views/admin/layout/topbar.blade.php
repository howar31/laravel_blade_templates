<div id="topbar">
	<div class="logo">
		<a href="{{ url('/') }}"><img src="{{ asset('images/logo/samplelogo2_white.svg') }}"></a>
		<button class="btn-toggle-sidebar open-left">
			<i class="fas fa-bars"></i>
		</button>
	</div>
	<nav class="navbar navbar-expand-md navbar-light" role="navigation">
		<a class="navbar-brand" href="{{ url('/') }}">Project Name</a>

		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item active">
					<a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">Link</a>
				</li>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						Dropdown
					</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdown">
						<a class="dropdown-item" href="#">Action</a>
						<a class="dropdown-item" href="#">Another action</a>
						<div class="dropdown-divider"></div>
						<a class="dropdown-item" href="#">Something else here</a>
					</div>
				</li>
				<li class="nav-item">
					<a class="nav-link disabled" href="#">Disabled</a>
				</li>
			</ul>
		</div>
		<div class="dropdown user-menu">
			<a href="javascript:void(0)" role="button" id="userDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				<i class="fas fa-user-circle"></i> Howar31
			</a>
			<div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
				<a class="dropdown-item" href="#">Profile</a>
				<a class="dropdown-item" href="#">Settings</a>
				<div class="dropdown-divider"></div>
				<a class="dropdown-item" href="#">Logout</a>
			</div>
		</div>
	</nav>
</div>
<!doctype html>
<html lang="{{ app()->getLocale() }}">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
		<meta name="mobile-web-app-capable" content="yes">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="description" content="Blade Template by Howar31">
		<meta name="author" content="Howar31">

		<title>Blade Template{{ empty($title) ? '' : ' - ' . $title }}</title>

		@yield('head_prepend')

		<!-- Material Design for Bootstrap 4 -->
		<link rel="stylesheet" href="{{ URL::asset(mix('css/bootstrap-material-design.css')) }}">

		@yield('head_append')
	</head>
	<body>
		@yield('body_prepend')

		<div id="content">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-12">
						@yield('content')
					</div>
				</div>
			</div>
		</div>
		{{-- @include('admin.layout.footer') --}}

		<!-- FontAwesome -->
		<script defer src="{{ URL::asset('/vendor/fontawesome/fontawesome-all.min.js') }}"></script>
		<!-- Material Design for Bootstrap 4 -->
		<script src="{{ URL::asset('/vendor/jquery/jquery.min.js') }}"></script>
		<script src="{{ URL::asset('/vendor/popper.min.js') }}"></script>
		<script src="{{ URL::asset('/vendor/bootstrap-material-design/bootstrap-material-design.min.js') }}"></script>

		@yield('body_append')

		<script>$(document).ready(function() { $('body').bootstrapMaterialDesign(); });</script>
	</body>
</html>

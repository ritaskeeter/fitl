<!DOCTYPE html>
<html>
	<head>
		<title>MyApp - @yield('title')</title>
		{{--Added by me--}}
		<link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
		<link rel="stylesheet" href="{{ asset('css/custom.css') }}">
		{{--End of links to CSS files--}}
	</head>

	<body>
		{{--Link to HEADER below using Partial Views command--}}

		@include('shared.header')

		{{--End of HEADER--}}

		{{--Enclose content within container class--}}
		<div class="container">
		@yield('content')
		</div>

		{{--Link to FOOTER below--}}

		@include('shared.footer')

		{{--End of FOOTER--}}

		{{--Added by me--}}
		<script src="{{ asset('js/jquery-3.5.1.js') }}"></script>
		<script src="{{ asset('js/bootstrap.js') }}"></script>
		{{--End of JS and jQuery files--}}
	</body>
</html>

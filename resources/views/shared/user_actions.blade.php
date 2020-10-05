<ul class="nav navbar-nav navbar-right">

	@if(Auth::check())
	<li class="dropdown">
		<a href="#" class="btn dropdown-toggle sm" data-toggle="dropdown" role="button"
		aria-haspopup="true" aria-expanded="false" style="color:white;">
		{{ Auth::user()->first_name }}<span class="caret"></span></a>

		<ul class="dropdown-menu dropdown-menu-right" id="logout-button">
			<li><a class="dropdown-item" href="{{ action('ProfileController@profile') }}">Profile</a></li>
			<li><a class="dropdown-item" href="{{ action('Auth\AuthController@getLogout') }}">Logout</a></li>
		</ul>
	</li>

	@else
	<li>
		<a class="btn" style="color:white;" href="{{ action('Auth\AuthController@getRegister') }}">Register</a></li>
	<li>
		<a class="btn" style="color:white;" href="{{ action('Auth\AuthController@getLogin') }}">Login</a></li>

	@endif
</ul> 
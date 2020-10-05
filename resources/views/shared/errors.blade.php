@if ( $errors->any() )
<div class="alert alert-danger" role="alert">
	@foreach ($errors->all() as $error)
	{{ $error }}<br>
	@endforeach
</div>
@endif

{{--@if ( count(array(session('errors'))) > 0 )
<div class="alert alert-danger">
	@foreach (array(session('errors')) as $error)
	{{ $error }}<br>
	@endforeach
</div>
@endif
This is not working. It leads to the following 2 errors
ErrorException in d99a45357c94deb9005704f7e04b32b6 line 1:
count(): Parameter must be an array or an object that implements Countable (View: /home/vagrant/code/fitl/resources/views/shared/errors.blade.php) (View: /home/vagrant/code/fitl/resources/views/shared/errors.blade.php) (View: /home/vagrant/code/fitl/resources/views/shared/errors.blade.php)
ERROR 2:
4/4
ErrorException in d99a45357c94deb9005704f7e04b32b6 line 3:
Call to a member function all() on null (View: /home/vagrant/code/fitl/resources/views/shared/errors.blade.php) (View: /home/vagrant/code/fitl/resources/views/shared/errors.blade.php) (View: /home/vagrant/code/fitl/resources/views/shared/errors.blade.php)
--}}
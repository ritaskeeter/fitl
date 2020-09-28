<h3>Want to delete the Language?</h3>

{!! Form::open([
	'route'=>['languages.destroy', $language->id],
	'method'=>'delete',
	'class'=>'delete_object'
	])
!!}

<button type="submit" class="btn btn-danger">Delete this Language</button>

{!! Form::close() !!}
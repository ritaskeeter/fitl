<h3>Want to delete the question?</h3>

{!! Form::open([
	'action'=>['QuestionController@destroy', $question->id],
	'method'=>'delete',
	'class'=>'delete_object'
	])
!!}

<button type="submit" class="btn btn-danger">Delete</button>

{!! Form::close() !!}
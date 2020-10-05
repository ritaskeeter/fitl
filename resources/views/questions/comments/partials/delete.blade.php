{!! Form::open([
	'route'=>['questions.comments.destroy', $questions->id, $comment->id],
	'method'=>'delete'
	]) !!}


	&nbsp;<button type="submit" class="btn btn-danger btn-sm">Delete</button>
	{{-- &nbsp; is used for a space between buttons--}}
	
{!! Form::close() !!}
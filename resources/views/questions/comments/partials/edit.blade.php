{!! Form::model($comment,
	[
		'route'=>['questions.comments.update', $questions->id, $comment->id],
		'method'=>'put',
		'class'=>'collapse edit-object-form'
	]) !!}

	@include('questions.comments.partials.comment_form')

	<button type="submit" class="btn btn-info">Update comment</button>

{!! Form::close() !!}
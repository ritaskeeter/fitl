<h5>Add your comments below:</h5>
{!! Form::open(['route'=>['questions.comments.store', $questions->id]]) !!}

@include('questions.comments.partials.comment_form')

	<button type="submit" class="btn btn-success">Add comment</button>

{!! Form::close() !!}
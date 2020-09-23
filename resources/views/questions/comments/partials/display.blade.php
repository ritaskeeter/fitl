<hr>
<h3>Comments</h3>
@include('questions.comments.partials.create')
<hr>

<ul class="list-group">
@foreach($single_object->comments as $comment)
	<li class="list-group-item">
		<div class="text-muted">
			<small>{{ $comment->created_at->diffForHumans() }}</small>
		</div>
		<p>{{ $comment->comment }}</p>

		<div>
			<button class="edit-object btn btn-info btn-sm float-left">Edit</button>
			@include('questions.comments.partials.delete')

		</div>

		@include('questions.comments.partials.edit')
	</li>
@endforeach
</ul>
{{--diffForHumans is a built-in function that displays time as "weeks ago, day ago, etc"--}}
<hr>

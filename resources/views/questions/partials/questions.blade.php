{{--page-header, list-group, list-group-item, etc are defined by Bootstrap--}}
<div class="list-group">
	@foreach($questions as $question)
		<div class="list-group-item">
			<a href="{{ url('questions', [$question->id]) }}">
				<h5 class="list-group-item-heading">{{ $question->title }}</h5>
			</a>
			<p class="list-group-item-text">
				Submitted on: {{ $question->created_at }}
			</p>
		</div>
	@endforeach
</div>
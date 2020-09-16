@extends('layouts.master')

@section('title', 'Questions')

@section('content')
<div class="page-header">
	<h3>Questions</h3>
</div>

<div class="list-group">
	@foreach($objects as $question)
		<div class="list-group-item">
			<a href="{{ url('questions', [$question->id]) }}">
			<h5 class="list-group-item-heading">{{ $question->title }}</h5></a>
			<p class="list-group-item-text">
				Submitted on: {{ $question->created_at }}
			</p>
		</div>
	@endforeach
</div>

@endsection

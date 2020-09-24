@extends('layouts.master')

@section('title', 'My Questions')

@section('content')
<div class="page-header">
	<a href="{{ url('questions/create') }}"button class="btn btn-success float-right">New Question</button></a>
	<h3>My Questions</h3>
</div>

{{--page-header, list-group, list-group-item, etc are defined by Bootstrap--}}
<div class="list-group">
	@foreach($my_objects as $question)
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

@endsection

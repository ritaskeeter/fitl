@extends('layouts.master')

@section('title', 'Profile')

@section('content')

<div class="page-header">
	<h3>Profile settings:</h3>
</div>

@if(Auth::user()->hasRole('Member'))
<div class="alert alert-info">User is a Member</div>
@endif

@if(Auth::user()->isAdmin())
<div class="alert alert-success">User is an Admin</div>
@endif

<h3>Roles</h3>
<ul>
	@foreach(Auth::user()->roles as $role)
		<li>{{ $role->name }}</li>
	@endforeach
</ul>

<h3>Submitted Questions:</h3>
	@include('questions.partials.questions', ['questions'=>$questions])
	
<h3>Comments:</h3>
<ul class="list-group">
@foreach($comments as $comment)
	<li class="list-group-item">
		<div class="text-muted">
			<small>{{ $comment->created_at->diffForHumans() }}</small>
		</div>
		<p><small>Question: </small><strong><a href="{{ url('questions',[$comment->question->id]) }}">{{ $comment->question->title }}</strong></p></a>
		<p>{{ $comment->comment }}</p>
	</li>
@endforeach

@endsection
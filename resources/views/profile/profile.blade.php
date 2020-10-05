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

@endsection
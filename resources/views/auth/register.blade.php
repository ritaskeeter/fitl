@extends('layouts.master')

@section('title', 'Register')

@section('content')

{!! Form::open(
	['action'=>'Auth\AuthController@postRegister']
) !!}

<div class="page-header">
	<h3>Register</h3>
</div>

<div class="form-group">
	{!! Form::label('name', 'Name') !!}
	{!! Form::text('name', old('name'),['class'=>'form-control']) !!}
</div>

<div class="form-group">
	{!! Form::label('email', 'Email') !!}
	{!! Form::text('email', old('email'),['class'=>'form-control']) !!}
</div>

<div class="form-group">
	{!! Form::label('password', 'Password') !!}
	{!! Form::password('password', ['class'=>'form-control']) !!}
</div>

<div class="form-group">
	{!! Form::label('password_confirmation', 'Confirm Password') !!}
	{!! Form::password('password_confirmation', ['class'=>'form-control']) !!}	
</div>

<button type="submit" class="btn btn-success">Register!</button>

{!! Form::close() !!}

@endsection

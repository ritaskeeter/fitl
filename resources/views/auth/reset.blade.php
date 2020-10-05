@extends('layouts.master')

@section('title', 'Reset your password')

@section('content')

{!! Form::open(
	['action'=>'Auth\PasswordController@postReset']
) !!}

{!! Form::hidden('token', $token) !!}

<div class="page-header">
	<h3>Reset your password</h3>
</div>

<div class="form-group">
	{!! Form::label('email', 'Email') !!}
	{!! Form::text('email', old('email'), ['class'=>'form-control']) !!}
</div>

<div class="form-group">
	{!! Form::label('password', 'New Password') !!}
	{!! Form::password('password', ['class'=>'form-control']) !!}
</div>

<div class="form-group">
	{!! Form::label('password_confirmation', 'Confirm Password') !!}
	{!! Form::password('password_confirmation', ['class'=>'form-control']) !!}	
</div>

<button type="submit" class="btn btn-success">Save changes to password!</button>

{!! Form::close() !!}

@endsection


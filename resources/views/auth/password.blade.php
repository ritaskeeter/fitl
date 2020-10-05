@extends('layouts.master')

@section('title', 'Reset password')

@section('content')

{!! Form::open(
	['action'=>'Auth\PasswordController@postEmail']
) !!}

<div class="page-header">
	<h3>Reset your Password</h3>
</div>

<div class="form-group">
	{!! Form::label('email', 'Email') !!}
	{!! Form::text('email', old('email'),['class'=>'form-control']) !!}
</div>

<button type="submit" class="btn btn-success">Send password reset link!</button>

{!! Form::close() !!}

@endsection


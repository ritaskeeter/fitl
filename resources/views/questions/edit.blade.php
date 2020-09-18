@extends('layouts.master')

@section('title', 'Update a Question')

@section('content')
<div class="page-header">
	<h3>Update a Question</h3>
</div>

{!! Form::model($question, 
	[
		'action'=>['QuestionController@update', $question->id],
		'method'=>'put'
	]) !!}

    @include('questions.partials.object_form')
    <button class="btn btn-success" type="submit">Update</button>
	
{!! Form::close()!!}

@include('questions.partials.delete_object')

@endsection
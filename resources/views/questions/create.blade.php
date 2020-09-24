@extends('layouts.master')

@section('title', 'Submit a Question')

@section('content')
<div class="page-header">
	<h3>Submit a Question</h3>
</div>

{!! Form::model($question, ['action'=>'QuestionController@store']) !!}

    @include('questions.partials.object_form')

    <button class="btn btn-primary" type="submit">Submit</button>
	
{!! Form::close()!!}

@endsection
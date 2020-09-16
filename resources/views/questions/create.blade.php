@extends('layouts.master')

@section('title', 'Submit a Question')

@section('content')
<div class="page-header">
	<h3>Submit a Question</h3>
</div>

{!! Form::model($new_question, ['action'=>'QuestionController@store']) !!}
	<div class="form-group">
    	{!! Form::label('title', 'What is your question?') !!}
    	{!! Form::text('title', '', ['class'=>'form-control']) !!}
	</div>

	<div class="form-group">
    	{!! Form::label('description', 'Describe in detail') !!}
    	{!! Form::textarea('description', '', ['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
    	{!! Form::label('code', 'Include code if any (Optional)') !!}
    	{!! Form::textarea('code', '', ['class'=>'form-control']) !!}
    </div>
    {{--The above codes refers to the class defined here - <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">--}}

    <button class="btn btn-primary" type="submit">Submit</button>
	
{!! Form::close()!!}

@endsection
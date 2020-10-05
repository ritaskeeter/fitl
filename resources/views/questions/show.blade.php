@extends('layouts.master')

{{--Blade comment syntax->Add comments within this--}}
{{--@section ('title', $questions->title)--}}

{{--***IMPORTANT***--}}
{{-- There must be no space between @section and ('title'). Otherwise there would be a "cannot end section error"-- @endsection--}}

@section('title')
<?php echo $questions->title; ?>
@endsection 


@section('content')
<div class="page-header">
	<a href="{{ action('QuestionController@edit', $questions->id) }}"
		class="btn btn-info float-right">Edit</a>
		{{--float-right will display the button on the right hand side--}}
<h3><?php echo $questions->title; ?></h3>
</div>

<p><?php echo $questions->description; ?></p>

        <code id="code-box"><?php echo $questions->code; ?></code>

<p style="margin-top: 2em;">Question Date: <?php echo $questions->created_at; ?></p>

@include('questions.comments.partials.display')

@endsection


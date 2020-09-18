@extends('layouts.master')

{{--Blade comment syntax->Add comments within this--}}
{{--@section ('title', $single_object->title)--}}

{{--***IMPORTANT***--}}
{{-- There must be no space between @section and ('title'). Otherwise there would be a "cannot end section error"-- @endsection--}}

@section('title')
<?php echo $single_object->title; ?>
@endsection 


@section('content')
<div class="page-header">
	<a href="{{ action('QuestionController@edit', $single_object->id) }}"
		class="btn btn-info float-right">Edit</a>
		{{--float-right will display the button on the right hand side--}}
<h3><?php echo $single_object->title; ?></h3>
</div>

<p><?php echo $single_object->description; ?></p>
    <pre>
        <?php echo $single_object->code; ?>
    </pre>
<p>Question Date: <?php echo $single_object->created_at; ?></p>
@endsection


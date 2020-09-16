@extends('layouts.master')

{{--Blade comment syntax->Add comments within this--}}
{{--@section ('title', $single_object->title)--}}

{{--***IMPORTANT***--}}
{{-- There must be no space between @section and ('title'). Otherwise there would be a "cannot end section error"-- @endsection--}}

@section('title')
<?php echo $single_object->title; ?>
@endsection 


@section('content')
<h3><?php echo $single_object->title; ?></h3>
<p><?php echo $single_object->description; ?></p>
    <pre>
        <?php echo $single_object->code; ?>
    </pre>
<p>Question Date: <?php echo $single_object->created_at; ?></p>
@endsection


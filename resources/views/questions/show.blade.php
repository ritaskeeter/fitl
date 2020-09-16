@extends('layouts.master')

{{--Blade comment syntax->Add comments within this--}}
{{--@section ('title', $object->title)--}}

{{--***IMPORTANT***--}}
{{-- There must be no space between @section and ('title'). Otherwise there would be a "cannot end section error"-- @endsection--}}

@section('title')
<?php echo $object->title; ?>
@endsection 


@section('content')
<h1><?php echo $object->title; ?></h1>
<p><?php echo $object->description; ?></p>
    <pre>
        <?php echo $object->code; ?>
    </pre>
<p>Question Date: <?php echo $object->created_at; ?></p>
@endsection


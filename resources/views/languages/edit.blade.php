@extends('layouts.master')

@section('title', 'Edit Language')

@section('content')
<div class="page-header">
	<h3>Edit a Programming Language</h3>
</div>

{!! Form::model($language, 
	[
		'route'=>['languages.update', $language->id],
		'method'=>'put'
	]
	) !!}

    @include('languages.partials.object_form')

    <button class="btn btn-success" type="submit">Save changes</button>
	
{!! Form::close()!!}
	@include('languages.partials.delete_object')

@endsection
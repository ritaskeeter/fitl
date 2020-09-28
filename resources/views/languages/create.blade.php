@extends('layouts.master')

@section('title', 'Create Language')

@section('content')
<div class="page-header">
	<h3>Create a Programming Language</h3>
</div>

{!! Form::model($language, ['route'=>'languages.store']) !!}

    @include('languages.partials.object_form')

    <button class="btn btn-success" type="submit">Create Language</button>
	
{!! Form::close()!!}

@endsection
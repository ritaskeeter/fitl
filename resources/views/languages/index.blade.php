@extends('layouts.master')

@section('title', 'Languages')

@section('content')


		<div class="page-header">
			<a href="{{ route('languages.create') }}"button class="btn btn-success float-right">+ New Language</button></a>
			<h3>Programming Languages</h3>
		</div>

		{{--page-header, list-group, list-group-item, etc are defined by Bootstrap--}}
		<div class="list-group">
			@foreach($languages as $language)
				<div class="list-group-item">
					<h5 class="list-group-item-heading">{{ $language->name }}</h5>
					<p class="list-group-item-text">
						<a href="{{ route('languages.edit', [$language->id]) }}">Edit</a>
					</p>
				</div>
			@endforeach
		</div>

@endsection

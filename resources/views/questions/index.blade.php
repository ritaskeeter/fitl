@extends('layouts.master')

@section('title', 'My Questions')

@section('content')

<div class="row">
	<div class="col-sm-9">

		<div class="page-header">
			<a href="{{ url('questions/create') }}"button class="btn btn-success float-right">New Question</button></a>
			<h3>Questions</h3>
		</div>

		@include('questions.partials.questions')

	</div><!--End of column-->
	@include('shared.languages_sidebar')
</div><!--End of row-->

@endsection

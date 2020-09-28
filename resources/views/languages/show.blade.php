@extends('layouts.master')

@section('title', $language->name . ' Questions')

@section('content')
<div class="row">
	<div class="col-sm-9">

		<div class="page-header">
			<a href="{{ url('questions/create')}}" class="btn btn-success float-right">+ New Question</a>
			<h3>{{ $language->name }} Questions</h3>
		</div>

		<div class="list-group">
			@foreach($language->questions as $question)
				<div class="list-group-item">
					<a href="{{ url('questions', [$question->id]) }}">
						<h5 class="list-group-item-heading">{{ $question->title }}</h5>
					</a>
					<p class="list-group-item-text">
						Submitted on: {{ $question->created_at }}
					</p>
				</div>
			@endforeach
		</div>

	</div><!--End of column-->
	@include('shared.languages_sidebar')
</div><!--End of row-->
@endsection
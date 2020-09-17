<div class="form-group">
	{!! Form::label('title', 'What is your question?') !!}
	{!! Form::text('title', null, ['class'=>'form-control']) !!}
</div>

<div class="form-group">
	{!! Form::label('description', 'Describe in detail') !!}
	{!! Form::textarea('description', null, ['class'=>'form-control']) !!}
</div>

<div class="form-group">
	{!! Form::label('code', 'Include code if any (Optional)') !!}
	{!! Form::textarea('code', null, ['class'=>'form-control']) !!}
</div>

{{--The above codes refers to the class defined here - <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">--}}
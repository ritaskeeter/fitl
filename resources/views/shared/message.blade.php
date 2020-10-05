@if(session('message'))
{!! session('message') !!}
@endif

@if(session('status'))
<div class="alert alert-success">{!! session('status') !!}</div>
@endif
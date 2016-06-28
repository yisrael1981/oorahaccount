@extends('layout.mainAccounts')
@section('content')
<div class="col-md-4 col-md-offset-4" style="margin-top:10em;">

{{ Form::open(array('url' => 'account/login')) }}
<h2 style="text-align:center;">Login</h2>

<div class="form-group">
    {{ Form::label('accountnum', 'Account Number') }}
    {{ Form::text('accountnum', '27430',[ 'required', 'class'=>'form-control']) }}
</div>


<div class="form-group">
    {{ Form::label('lastname', 'Last Name') }}
    {{ Form::text('lastname' , 'abrahamson', ['required', 'class'=>'form-control']) }}
</div>

<p>{{ Form::submit('Log in ') }}</p>
{{ Form::close() }}
</div>
@stop
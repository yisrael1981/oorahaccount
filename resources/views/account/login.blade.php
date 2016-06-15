<!doctype html>
<html>
<head>
<title>Look at me Login</title>
</head>
<body>

{{ Form::open(array('url' => 'account/login')) }}
<h1>Login</h1>
@if(Session::has('message'))

	<p class="alert alert-danger">{!! Session::get('message') !!}</p>
	@endif
<p>
    {{ $errors->first('accountnum') }}
    {{ $errors->first('lastname') }}
</p>


<p>
    {{ Form::label('accountnum', 'Account Number') }}
    {{ Form::text('accountnum', '204095',[ 'required']) }}
</p>


<p>
    {{ Form::label('lastname', 'Last Name') }}
    {{ Form::text('lastname' , 'pultman', ['required']) }}
</p>

<p>{{ Form::submit('Submit!') }}</p>
{{ Form::close() }}
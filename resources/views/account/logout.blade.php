	@extends('layout.mainAccounts')
@section('content')
<div>You have been logged out</div>
{{link_to_route('accountlogin', 'Login') }}
@stop
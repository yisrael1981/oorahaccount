	@extends('layout.mainAccounts')
@section('content')

          
	@foreach ($admire->DashboardFamilyNames(session('accountid')) as $familyName)
<h2>{{$familyName->LastName }} Account #<span id="accountid">{{session('accountid')}}</span></h2>
@if ($familyName->HisName != '')
	 {{$familyName->HisTitle }}  {{$familyName->HisName }} {{$familyName->LastName }} 
<br>
@endif
@if ($familyName->HerName  != '')
 {{$familyName->HerTitle }}  {{$familyName->HerName }} {{$familyName->LastName }} 
 @endif

		@endforeach
	<hr/>
<div class="col-md-8">

  <!-- Nav tabs -->
  <ul class="nav nav-tabs" role="tablist">
    <li role="presentation" class="active"><a href="#address" aria-controls="home" role="tab" data-toggle="tab">Address</a></li>
    <li role="presentation"><a href="#phone" aria-controls="profile" role="tab" data-toggle="tab">Family Contact Info</a></li>
    
  </ul>

  <!-- Tab panes -->
  <div class="tab-content">
    <div role="tabpanel" class="tab-pane address-tab active" id="address">
	   @include('account.partial.address') 
	</div>
    <div role="tabpanel" class="tab-pane address-tab" id="phone">

	   @include('account.partial.telephone') 

	
	</div>
  </div>

</div>
<?php
$indlists = $admire->DashboardIndividual(session('accountid'));
  if ( count($indlists) > 0 ) { ?>

<div class="col-md-4 sidebar">
	<h3>Individuals</h3>
	<ul>
	
@foreach ( $indlists as $familyIndividual)
		
		
<li id="{{$familyIndividual->IND_ID}}""><a href="dashboardind/{{$familyIndividual->IND_ID}}">
   {{$familyIndividual->FirstName}}   {{$familyIndividual->LastName}}
	</a> </li>
@endforeach

	<ul>
	</div>
	<?php } //end if has ind?>

@stop
@section('footerlink')

@stop
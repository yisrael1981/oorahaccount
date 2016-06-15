	@extends('layout.mainAccounts')
@section('content')

<h2>Dashboard</h2>

	@foreach ($familyNames as $familyName)
	 {{$familyName->HisTitle }}  {{$familyName->HisName }} {{$familyName->LastName }} 
<br>
 {{$familyName->HerTitle }}  {{$familyName->HerName }} {{$familyName->LastName }} 

		@endforeach
	<hr/>
<div class="col-md-8">

  <!-- Nav tabs -->
  <ul class="nav nav-tabs" role="tablist">
    <li role="presentation" class="active"><a href="#address" aria-controls="home" role="tab" data-toggle="tab">Address</a></li>
    <li role="presentation"><a href="#phone" aria-controls="profile" role="tab" data-toggle="tab">Contact Info</a></li>
    
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
<div class="col-md-4 sidebar">
	<h3>Individuals</h3>
	<ul>
	
@foreach ($familyIndividuals as $familyIndividual)
		
		
<li id=	{{$familyIndividual->IND_ID}}><a href="../dashboardind/{{$familyIndividual->IND_ID}}">
   {{$familyIndividual->FirstName}}   {{$familyIndividual->LastName}}
	</a> </li>
@endforeach

	<ul>
	</div>

@stop
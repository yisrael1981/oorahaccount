@extends('layout.mainAccounts')

@section('content')

<h2>Dashboard</h2>

@foreach ($admire->DashboardIndGetInfo($indid) as $IndInfoLi)
		 
 {{$IndInfoLi->FirstName }}    {{$IndInfoLi->LastName }}  
	@if ($IndInfoLi->DOB != "")
		<br>Date of Birth:
		
		<?php 
		$dob = new DateTime($IndInfoLi->DOB);
echo $dob->format('d-m-Y');?>
		@else
		 @include('account.partial.dob') 
	@endif	  
 
<br>


@endforeach

   @include('account.partial.telephone') 
	<input type="hidden" name="page" value="ind" id="page"/>
    <br>
<br><h2>Kiruv Associations</h2><br>
<ul>
	@foreach ($admire->DashboardIndAffiliation($indid) as $IndAffiliation)


<li>	{{$IndAffiliation->Type}} {{$IndAffiliation->Detail}}<br>

@if ($IndAffiliation->Type == "CAMP")
<p><a target='_blank' href='http://www.thezone.org/form_validate.asp?id={{$IndAffiliation->RelatedID}}&name={{$IndInfoLi->LastName }}'>Login</a></p>
@elseif ($IndAffiliation->Type == "CHAVRUSAH")

<p><a target='_blank' href='http://www.torahmates.org/mileage/index.asp?id={{$IndAffiliation->RelatedID}}&from=oorah'>Login</a></p>
@elseif ($IndAffiliation->Type == "TUITION" && $IndAffiliation->Status == "Confirmed")

<p><a target='_blank' href='http://www.oorah.org/newtution/index.asp?id={{$IndAffiliation->RelatedID}}&from=oorah'>Login</a></p>
@endif

{{$IndAffiliation->Status}}
	
@if ($IndAffiliation->Coordinator !="") 
	<br>Coordinator: {{$IndAffiliation->Coordinator}}
	@endif

</li>
		@endforeach

<!-- <li><a href="https://www.thezone.org/">Apply to camp</a></li> -->
</ul>
@stop

@section('footerlink')
{{link_to_route('accountmaindashboard', 'Back to Main Dashboard') }}
@stop
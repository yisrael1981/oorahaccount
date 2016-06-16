	@extends('layout.mainAccounts')
@section('content')

<h2>Dashboard</h2>

@foreach ($IndInfo as $IndInfoLi)
		 
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
@if ($IndInfoLi->ImageThumb !="") 

	<img style="max-width:250px;" src="data:image/jpeg;base64,<?php base64_encode($IndInfoLi->ImageThumb ); ?>"/>
	<br><!--{{ link_to_route('accountupload', 'Update Image',$IndInfoLi->IND_ID ) }}-->
	@else
		<br><!--{{ link_to_route('accountupload', 'Add Image',$IndInfoLi->IND_ID) }}-->
		@endif

@endforeach
<hr/>

   @include('account.partial.telephone') 
	<input type="hidden" name="page" value="ind" id="page"/>
    <br>
<br><h2>Kiruv Associations</h2><br>
	@foreach ($IndAffiliations as $IndAffiliation)


	{{$IndAffiliation->Type}} {{$IndAffiliation->Detail}}<br>
@if ($IndAffiliation->RelatedTo = "CAMP")
<p><a target='_blank' href='http://www.thezone.org/form_validate.asp?id={{$IndAffiliation->RelatedID}}&name={{$IndInfoLi->LastName }}'>Login</a></p>
@endif
{{$IndAffiliation->Status}}
	
@if ($IndAffiliation->Coordinator !="") 
	<br>Coordinator: {{$IndAffiliation->Coordinator}}
	@endif


		@endforeach
<ul>
<!-- <li><a href="https://www.thezone.org/">Apply to camp</a></li> -->
</ul>
@stop
@footerlink
{{link_to_route('accountInddashboard', 'Back to Main Dashboard', $parentid)}}">
@stop
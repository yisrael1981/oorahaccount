<?php  $teltype  = ''; ?>

@foreach ($TelLists as $TelListsLi)

@if (strtolower($teltype) != strtolower($TelListsLi->Type))
<span data-type="type"><strong>{{$TelListsLi->Type}}</strong></span><br/>
<?php $teltype = $TelListsLi->Type; ?>
@endif

 <div id="{{$TelListsLi->TEL_ID}}"><address>
<span data-type="type" style="visibility:hidden;">{{$TelListsLi->Type}}</span>
	<span data-type="tel">{{$TelListsLi->Tel}}</span> 
	
		<button type='button' class='btn-xs btn btn-default edittelbtn' data-toggle='modal' data-target='#telModal' id='editbtn' data-type='{{$TelListsLi->TEL_ID}}'>Edit</button>
		 <button type='button' class='btn-xs btn btn-default deltelbtn'  data-toggle='modal' data-target='#telModal' data-type='{{$TelListsLi->TEL_ID}}'>Delete </button>
		</address></div>
		
		@endforeach
		
<button type="button" class=" btn-xs btn btn-default" data-toggle="modal" data-target="#telModal" id="newtelbtn">Add new contact number/email</button>

<div id="telModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Contact Number</h4>
      </div>
      <div class="modal-body">



{{ Form::open(array('url' => '', 'id'=>'form2','method'=>'POST')) }}
<input type="hidden" value="" name="telid" id="telid"/>
 <input type="hidden" value="{{session('accountid')}}" name="accountid" id="accountid"/>
@if (isset($IndInfoLi) )
 <input type="hidden" value="{{$IndInfoLi->IND_ID }}" name="indid" id="indid"/>
@endif
<div class="form-group">
<label for="type">Type of Contact</label>
<select name="Type" id="Type" class="form-control">
<option value="HOME">HOME</option>
<option value="WORK">WORK</option>
<option value="CELL">CELL</option>
<option value="EMAIL">EMAIL</option>
</select>
</div>
<div class="form-group">
<label for="Telephone">Telephone/Email</label>
<input type="text" name="Telephone"  id="Telephone" class="form-control">
</div>
<input type="hidden" name="active" value="1" id="active" />
<div class="form-group">
<input type="button" id="sbtbutntel" class="insert btn btn-default" value="Insert">
<input type="button" id="sbtbutntel" class="edit btn btn-default" value="Edit" style="display:none;">
<input type="button" id="sbtbutntel" class="delete btn btn-default" value="Delete Address" style="display:none;">


</div>
{{Form::close()}}



    </div>

  </div>
</div>
</div>
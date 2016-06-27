
<?php 
 $addType = '';
?>

	@foreach ($admire->DashboardFamilyAddress(session('accountid'))  as $familyAddressLi)
		
	@if (strtolower($addType) != strtolower($familyAddressLi->Type ))

	<span data-type="type"><strong>{{  $familyAddressLi->Type }}</strong></span><br/>
	<?php $addType = $familyAddressLi->Type ;?>
	@endif

@if ($familyAddressLi->InActive ==0 ) 

<div class='address' id="{{$familyAddressLi->ADR_ID}}"><address>
<input type="radio" name="defaultaddr" value="{{$familyAddressLi->ADR_ID}}"
@if ($familyAddressLi->IsDefault == 1 ) 
		checked="checked"
		@endif
		/>
<span data-type="type" style="visibility:hidden;">{{$familyAddressLi->Type }}</span><br/>
<span data-type="address">{{$familyAddressLi->Number}} {{$familyAddressLi->Street}}</span>
<br>
 <span data-type="city">{{$familyAddressLi->City}}</span> <span data-type="state">{{$familyAddressLi->State}}</span>  <span data-type="zip">{{$familyAddressLi->Zip}}</span>
 <span data-type="country">{{$familyAddressLi->Country}}</span>

 <button type='button' class='btn-xs btn btn-default editbtnAddress' data-toggle='modal' data-target='#addressModal' id='editbtn' data-type={{$familyAddressLi->ADR_ID}}>Edit </button>
 <button type='button' class='btn-xs btn btn-default delbtnAddress'  data-toggle='modal' data-target='#addressModal' data-type={{$familyAddressLi->ADR_ID}}>Delete </button>
</address></div>
	@endif <!-- end if active -->
	
	@endforeach <!-- end foreach address-->
<br>
<button type="button" class="btn-xs btn btn-default " data-toggle="modal" data-target="#addressModal" id="newaddressbtn">Add new address</button>
<button type="button" class="btn-xs btn btn-default" id="changedefaultbtn">Change Default to selected</button>
<div id="addressModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Address</h4>
      </div>
      <div class="modal-body">



{{ Form::open(array('url' => '', 'id'=>'form1','method'=>'POST')) }}
<input type="hidden" value="" name="adrid" id="adrid"/>
<input type="hidden" value="{{$familyName->ACT_ID }}" name="accountid" id="accountid"/>
<div id="hideDelete">
<div class="form-group">
<label for="type">Type of Address</label>
<select name="Type" id="TypeAddress" class="form-control">
<option value="HOME">HOME</option>
<option value="WORK">WORK</option>
</select>
</div>
<div class="form-group">
<label for="Address">Address</label>
<input type="text" name="Address"  id="Address" class="form-control">
</div>
<div class="form-group">
<label for="City">City</label>
<input type="text" name="City" id='City' class="form-control">
</div>
<div class="form-group">
<label for="State">State</label>
<input type="text" name="State" id="State" class="form-control">
</div>

<div class="form-group">
<label for="Zip">Zip</label>
<input type="text" name="Zip" id='Zip' class="form-control">
</div>
<div class="form-group">
<label for="Country">Country</label>
<input type="text" name="Country" id='Country' class="form-control">
</div>
</div>
<input type="hidden" name="InActive" value="0" id="InActive" />
<div class="form-group">
<input type="button" id="sbtbutn" class="insert btn btn-default" value="Insert new Address">
<input type="button" id="sbtbutn" class="edit" value="Edit Address" style="display:none;">
<input type="button" id="sbtbutn" class="delete" value="Delete Address" style="display:none;">

</div>
{{Form::close()}}



    </div>

  </div>
</div>
</div>

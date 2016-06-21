<div>
<button type="button" class=" btn-xs btn btn-info btn-lg" data-toggle="modal" data-target="#dateModal" id="dobbtn">Add Date of Birth</button>
</div>
<div id="dateModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Date of Birth</h4>
      </div>
      <div class="modal-body">

{{ Form::open(array('url' => '', 'id'=>'formdb','method'=>'POST')) }}


<input type="hidden" value="{{$IndInfoLi->IND_ID}}" name="indid" id="indid"/>


<div class="form-group">
<label for="Telephone">Date of Birth</label>
<input type="text" name="DOB"  id="DOB">
</div>
<div class="form-group">
<input type="button" id="sbtbutndob" class="insert" value="Insert">

</div>
{{Form::close()}}
    </div>

  </div>
</div>
</div>
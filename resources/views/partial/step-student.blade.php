<style>

</style>
<div class="row">
<div class="form-group col-md-4"> {{Form::label('LastName','Last Name*')}}

  {{Form::text('LastName',null,['class'=>'form-control ','required'])}} </div>  
  
<div class="form-group col-md-4"> {{Form::label('FirstName','First Name*')}}
  {{Form::text('FirstName',null,['class'=>'form-control ','required'])}} </div>
<div class="form-group col-md-4"> {{Form::label('HebrewName','Hebrew Name*')}}
  {{Form::text('HebrewName',null,['class'=>'form-control ','required'])}} </div>
</div>
<div class="row"> 
<div class="form-group col-md-6"> {{Form::label('Address','Address*')}}
  {{Form::text('Address',null,['class'=>'form-control ','required'])}} </div>
<div class="form-group col-md-6"> {{Form::label('City','City*')}}
  {{Form::text('City',null,['class'=>'form-control ','required'])}} </div>
</div>
<div class="row">  
<div class="form-group  col-md-4"> {{Form::label('State','State*')}}
  {{Form::text('State',null,['class'=>'form-control ','required'])}} </div>

<div class="form-group  col-md-4"> {{Form::label('Zip','Zip*')}}
  {{Form::text('Zip',null,['class'=>'form-control ','required'])}} </div>
 
<?php
 $listCountry = array(''=>'','CANADA'=>'CANADA','ISRAEL'=>'ISRAEL','ENGLAND'=>'ENGLAND','ARGENTINA'=>'ARGENTINA','BRAZIL'=>'BRAZIL','FRANCE'=>'FRANCE','MEXICO'=>'MEXICO','UKRAINE'=>'UKRAINE');
 ?>

<div class="form-group col-md-4"> {{Form::label('Country','Country: (if not USA) ')}}
  {{Form::select('Country', $listCountry, null,['class'=>'form-control '])}} </div>
 </div>
 <div class="row"> 
<div class="form-group col-md-3"> {{Form::label('StudentHome','Home Phone Number*')}}
  {{Form::tel('StudentHome',null,['class'=>'form-control ','required'])}} </div>

<div class="form-group col-md-3"> {{Form::label('StudentCell',"Student's Cell")}}
  {{Form::tel('StudentCell',null,['class'=>'form-control '])}} </div>

<div class="form-group col-md-3"> {{Form::label('StudentEmail',"Student's Email")}}
  {{Form::email('StudentEmail',null,['class'=>'form-control '])}} </div>

<div class="form-group col-md-3"> {{Form::label('SSN','Social Security Number')}}
  {{Form::text('SSN',null,['class'=>'form-control '])}} </div>
</div>
<div class="row">
<div class="form-group col-md-4">
  <p>Citizenship</p>
  <label class="radio-inline">
  {{Form::radio('Citizenship','US Citizen',true,  ['id'=>'citizen1','class'=>'','required'])}}
  US
  </label>
  <label class="radio-inline">
  {{Form::radio('Citizenship','Permanent Resident',false, ['id'=>'citizen2'])}}
  Permanent Resident</label>
  <label class="radio-inline">
  {{Form::radio('Citizenship','Other',false,  ['id'=>'citizen3'])}} 
  Other
</label>
</div>
<div class="form-group col-md-4"> {{Form::label('CitizenshipOther','If other, which one?')}}
  {{Form::text('CitizenshipOther',null,['class'=>'form-control '])}} </div>

  <div class="form-group col-md-4"> {{Form::label('PlaceOfBirth','Place of Birth*')}}
  {{Form::text('PlaceOfBirth',null,['class'=>'form-control ','required'])}} </div>
</div>
<div class="row">
<div class="form-group col-md-12">
  <p>Parent's Marital Status*</p>
<label class="radio-inline">
  {{Form::radio('ParentMarital','Married',true, ['id'=>'ParentMarital1','required'])}}
  Married
 </label>
  
 <label class="radio-inline">
  {{Form::radio('ParentMarital','Divorced',false, ['id'=>'ParentMarital2'])}}
  Divorced
  </label>
  <label class="radio-inline">
  {{Form::radio('ParentMarital','Separated',false,  ['id'=>'ParentMarital3'])}}
  Separated
  </label>
  <label class="radio-inline">
  {{Form::radio('ParentMarital','Widowed',false,  ['id'=>'ParentMarital4'])}}
  Widowed
  </label>
  <label class="radio-inline">
  {{Form::radio('ParentMarital','Single',false, ['id'=>'ParentMarital5'])}}
  Single
  </label>
   </div>

<div class="form-group col-md-12">
  <label for "ChildStaysWith">With whom does student live?* </label>
  {{Form::select('ChildStaysWith',
  array(''=>'','Both Parents' => 'Both Parents', 'Father' => 'Father','Mother'=>'Mother','Foster'=>'Foster','Guardian'=>'Guardian','Other'=>'Other'),
  null,['class'=>'form-control','required'])}} </div>

<div class="form-group col-md-12">
  <p>If parents are divorced, does the other parent have visitation right?</p></label>
  <label class="radio-inline">
  {{Form::radio('visitation','1',false,['id'=>'visitation_1'])}}
  Yes
  </label>
  <label class="radio-inline">
  {{Form::radio('visitation','0',false,['id'=>'visitation_0'])}}
  No</label>
   </div>

<div class="form-group col-md-4">
  <label for="Gender">Student's Gender*</label>
  {{Form::select('Gender',array(''=>'','Male'=>'Male','Female'=>'Female'), null,['class'=>'form-control','required'])}} </div>

<div class="form-group col-md-4">
  <label for "DOB">Date of Birth*</label>
   
  @if(isset($application))
  {{Form::text('DOB',$application->DOB->format('d/m/Y'),['class'=>'form-control ','required'])}} 
  @else
{{Form::text('DOB',null,['class'=>'form-control ','required'])}}
  @endif 
</div>

<?php 
$listgrade = array(''=>'','Nursery'=>'Nursery','Kindergarten'=>'Kindergarten','Pre-1A'=>'Pre-1A','1'=>'1','2'=>'2',
  '3'=>'3','4'=>'4','5'=>'5','6'=>'6','7'=>'7','8'=>'8','9'=>'9','10'=>'10','11'=>'11','12'=>  '12','PHS'=>'PHS');
?>

<div class="form-group col-md-4">
  {{Form::label("Grade",'Grade Current Year*')}}
  {{Form::select('Grade',$listgrade, null,['class'=>'form-control','required'])}} </div>
<div class="form-group col-md-6">

  <p for="StudentRelStatus">Religious status*</p>
 <label class="radio-inline">
  {{Form::radio('StudentRelStatus','Born Jewish',true,  ['id'=>'StudentRelStatus_1','required'])}}
  Born Jewish
  </label>
  <label class="radio-inline">
  {{Form::radio('StudentRelStatus','Converted',false,  ['id'=>'StudentRelStatus_2'])}}
  Converted
  </label>
  <label class="radio-inline">
  {{Form::radio('StudentRelStatus','Not Jewish',false,  ['id'=>'StudentRelStatus_3'])}} 
  Not Jewish
  </label>
 </div> 
<div class="form-group col-md-6">

  <label for "ConversionRabbi" class="control-label">If converted, Name of Rabbi</label>
  {{Form::text('ConversionRabbi',null,['class'=>'form-control ','maxlength'=>'50'])}} </div>

</div>
   <script>
    function getDataMother() 
      {  
	  if (document.getElementById("sameAddMother").checked) {
      document.getElementById("MotherLastName").value = $('#LastName').val();
  document.getElementById("MotherAddress").value = $('#Address').val();
  
  document.getElementById("MotherCity").value = $('#City').val();
  document.getElementById("MotherState").value = $('#State').val();
  document.getElementById("MotherZip").value = $('#Zip').val();
  document.getElementById("MotherCountry").value = $('#Country').val();
  document.getElementById("MotherHome").value = $('#StudentHome').val();
        } else {
        
    document.getElementById("MotherLastName").value = "";
  document.getElementById("MotherAddress").value = "";
  
  document.getElementById("MotherCity").value = "";
  document.getElementById("MotherState").value = "";
  document.getElementById("MotherZip").value = "";
  document.getElementById("MotherCountry").value = "";
  document.getElementById("MotherHome").value = "";
  
}
      }
	  </script>

<div class="checkbox">
<label>
        <input type="checkbox" name="sameAdd" id="sameAddMother" onClick="getDataMother();">
      Same contact info as child
</label>      
    </div><!-- /input-group -->
 <div class="row">   
 
 <div class="form-group col-md-4">
<label for "MotherTitle">Title*</label>
  {{Form::select('MotherTitle',array(''=>'','Mrs.'=>'Mrs.','Rabbi'=>'Rabbi','Dr.'=>'Dr.'), null,['class'=>'form-control','required'])}}
    </div>
  <div class="form-group col-md-4">
  {{Form::label("MotherLastName",'Last Name*')}}
  {{Form::text('MotherLastName',null,['class'=>'form-control ','maxlength'=>'30','required'])}}
</div>
<div class="form-group col-md-4">
{{Form::label("MotherFirstName",'First Name*')}}
  
  {{Form::text('MotherFirstName',null,['class'=>'form-control ','maxlength'=>'30','required'])}}
  </div>

<div class="form-group col-md-6">
{{Form::label("MotherAddress",'Address*')}}

  {{Form::text('MotherAddress',null,['class'=>'form-control ','maxlength'=>'30','required'])}}

</div>
<div class="form-group col-md-6">
{{Form::label("MotherCity",'City*')}}
  
  {{Form::text('MotherCity',null,['class'=>'form-control ','maxlength'=>'40','required'])}}
  </div>
  <div class="form-group col-md-4">
 {{Form::label("MotherState",'State*')}}
  
  {{Form::text('MotherState',null,['class'=>'form-control ','maxlength'=>'20','required'])}}
  </div>
  <div class="form-group col-md-4">
{{Form::label("MotherZip",'Zip*')}}

{{Form::text('MotherZip',null,['class'=>'form-control ','maxlength'=>'15','required'])}}
</div>
<div class="form-group col-md-4">
{{Form::label("MotherCountry",'Country*')}}
 
  {{Form::text('MotherCountry',null,['class'=>'form-control ','maxlength'=>'20','required'])}}
  </div>

  
<div class="form-group col-md-4">
{{Form::label("MotherHome",'Mother\'s Home Phone*')}}
  
   {{Form::tel('MotherHome',null,['class'=>'form-control ','maxlength'=>'50','required'])}}
  </div>
<div class="form-group col-md-4">
<label for "MotherCell">Mother's Cell Phone #</label>
 {{Form::tel('MotherCell',null,['class'=>'form-control ','maxlength'=>'50'])}}                     
</div>
<div class="form-group col-md-4">
<label for "MotherEmail">Mother's E-mail*</label>
 {{Form::email('MotherEmail',null,['class'=>'form-control ','maxlength'=>'50','required'])}}

</div>
<div class="form-group col-md-4">
<label for "MotherWork">Mother's Work No</label>
  {{Form::text('MotherWork',null,['class'=>'form-control ','maxlength'=>'50'])}}                     
  </div>
  <div class="form-group col-md-8">
  	<label for "MotherOccupation">Mother's Occupation*</label>

 {{Form::text('MotherOccupation',null,['class'=>'form-control ','maxlength'=>'75','required'])}}
</div>
<div class="form-group col-md-12">

<label>Citizenship*</label>
<label class="radio-inline" >   
{{Form::radio('MotherCitizenship','US Citizen',false,  ['id'=>'MotherCitizenship_0', 'required'])}}

US Citizen</label> 

<label class="radio-inline" for="MotherCitizenship_0"> 
    
     {{Form::radio('MotherCitizenship','permanent resident',false,  ['id'=>'MotherCitizenship_1'])}}
                     Perm. Resident </label>
                 <label class="radio-inline" for="MotherCitizenship_2">
     {{Form::radio('MotherCitizenship','other',false,  ['id'=>'MotherCitizenship_2'])}}

                                      Other  </label>
                                      </div>

                    <div class="form-group col-md-12">
<label for "MotherCitizenship">If Other? What country?</label>
 {{Form::text('MotherCitizenship1',null,['class'=>'form-control ','maxlength'=>'50'])}}                     

 </div>

<div class="form-group col-md-12">
<label for="MotherReligiousStatus">Mother's Religious Status*</label>

<label class="radio-inline">
  {{Form::radio('MotherReligiousStatus','Born Jewish',true,  ['id'=>'MotherReligiousStatus_0', 'required'])}}
    Born Jewish
</label>
<label class="radio-inline">
  {{Form::radio('MotherReligiousStatus','Converted',false,  ['id'=>'MotherReligiousStatus_1'])}}
  Converted
  </label>
  <label class="radio-inline">

  {{Form::radio('MotherReligiousStatus','Not Jewish',false,  ['id'=>'MotherReligiousStatus_2'])}}
  Not Jewish
  </label>
  </div>
<div class="form-group col-md-12">
<label for "MotherConversionRabbi">If converted, name of Rabbi</label>
 {{Form::text('MotherConversionRabbi',null,['class'=>'form-control ','maxlength'=>'50'])}}                     
</div>
<div class="form-group col-md-12">
 <label> Mother's Jewish educational background</label>
 {{Form::textarea('MotherEdBackground',null,['class'=>'form-control '])}}                      
 
 </div>
<?php 
$listethnicity = array(''=>'','American'=>'American','Israeli'=>'Israeli','Bukharian'=>'Bukharian','Russian'=>'Russian','Sefardi'=>'Sefardi','Other'=>'Other')
 ?>
 <div class="form-group col-md-12">
  <label for "MotherEthnicity">Mother's Ethnicity*</label>
    {{Form::select('MotherEthnicity', $listethnicity, null,['class'=>'form-control ','required'])}}

  </div>
  <?php 
$listaffiliation = array(''=>'','Reform'=>'Reform','Conservative'=>'Conservative','Traditional'=>'Traditional','Orthodox'=>'Orthodox','Daati'=>'Daati','Mesorati'=>'Mesorati','Chareidi'=>'Chareidi','Other'=>'Other');
  ?>
  <div class="form-group col-md-12">
  <label for "MotherAffiliation">Religious Affiliation*</label>
      {{Form::select('MotherAffiliation', $listaffiliation, null,['class'=>'form-control ','required'])}}
  </div>

<div class="form-group col-md-12">
  <label for "MotherIntJudiasm">Are you interested in learning more about Judaism?*</label>
<label for="MotherIntJudiasm_0" class="radio-inline" >
  {{Form::radio('MotherIntJudiasm','1',true,  ['id'=>'MotherIntJudiasm_0','class'=>'radio ','required'])}} Yes</label>
    
<label for="MotherIntJudiasm_1" class="radio-inline"> 
{{Form::radio('MotherIntJudiasm','0',false,  ['id'=>'MotherIntJudiasm_1', 'class'=>'radio '])}}
No</label>
</div>

    </div>
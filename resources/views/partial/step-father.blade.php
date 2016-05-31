<div class="row"><div class="form-group col-md-12 checkbox">
 
    <label>
{{Form::checkbox('copyfather','1',false,['id'=>'copyfather', 'onclick'=>'getDataFather();'])}}
Same contact information as child
</label>
</div>
 
<script>
//do i need to copy this over or can admire automatically capture it? 
    function getDataFather() 
      {  
	  if (document.getElementById("copyfather").checked) {
    document.getElementById("FatherLastName").value =  $('#LastName').val();
  document.getElementById("FatherAddress").value = $('#Address').val();
    document.getElementById("FatherCity").value = $('#City').val();
  document.getElementById("FatherState").value =$('#State').val();
  document.getElementById("FatherZip").value = $('#Zip').val();
  document.getElementById("FatherCountry").value = $('#Country').val();
  document.getElementById("FatherHome").value = $('#StudentHome').val();
      } else{ 
      document.getElementById("FatherLastName").value = "";
  document.getElementById("FatherAddress").value = "";
    document.getElementById("FatherCity").value = "";
  document.getElementById("FatherState").value = "";
  document.getElementById("FatherZip").value = "";
  document.getElementById("FatherCountry").value = "";
  document.getElementById("FatherHome").value = "";
  
   }
 }
	  </script>
      
<div class="form-group col-md-4">

<label for="FatherTitle">Title*</label>
{{Form::select('FatherTitle',array(''=>'','Mr.'=>'Mr.','Rabbi'=>'Rabbi','Dr.'=>'Dr.'), null,['class'=>'form-control','required'])}}
     </div>
  
  <div class="form-group col-md-4">
  
  {{Form::label('FatherLastName','Last Name*')}}
  {{Form::text('FatherLastName',null,['class'=>'form-control ','maxlength'=>'30','required'])}}

  </div>
  <div class="form-group col-md-4">
{{Form::label('FatherFirstName','First Name*')}}
 {{Form::text('FatherFirstName',null,['class'=>'form-control ','maxlength'=>'30','required'])}}
  
  </div>
  
  <div class="checkbox col-md-12">
<label>
<input type="checkbox" name="notavailable" id="notavailable" onClick="checknotavailable();" />
Address not available</label>
<script>
function checknotavailable() {
	if (document.getElementById("notavailable").checked == true ){
		alert("Please write in the address field the reason father's address is not available.");
	}
}
</script>
</div>
  
  
<div class="form-group col-md-6">
{{Form::label('FatherAddress','Address*')}}
 {{Form::text('FatherAddress',null,['class'=>'form-control ','maxlength'=>'30','required'])}}
</div>
<div class="form-group col-md-6">

{{Form::label('FatherCity','City*')}}
  {{Form::text('FatherCity',null,['class'=>'form-control ','maxlength'=>'40','required'])}}
  
  </div>
  <div class="form-group col-md-4">
    {{Form::label('FatherState','State*')}}
 
    {{Form::text('FatherState',null,['class'=>'form-control ','maxlength'=>'20','required'])}}
  </div>

  <div class="form-group col-md-4">
{{Form::label('FatherZip','Zip*')}}

{{Form::text('FatherZip',null,['class'=>'form-control ','maxlength'=>'15','required'])}}
</div>

<div class="form-group col-md-4">
{{Form::label('FatherCountry','Country*')}}
   {{Form::text('FatherCountry',null,['class'=>'form-control ','maxlength'=>'20','required'])}}
  </div>

  <div class="form-group col-md-4">
{{Form::label('FatherHome','Father\'s Home Phone*')}}
  {{Form::tel('FatherHome',null,['class'=>'form-control ','maxlength'=>'50','required'])}}
  </div>


  <div class="form-group col-md-4">
<label for "FatherCell">Father's Cell</label>
{{Form::tel('FatherCell',null,['class'=>'form-control ','maxlength'=>'50'])}}

</div>


<div class="form-group col-md-4">
<label for "FatherWork">Father's Work No</label>
  {{Form::tel('FatherWork',null,['class'=>'form-control ','maxlength'=>'50'])}}

  </div>
<div class="form-group col-md-6">
<label for "FatherEmail">Father's E-mail*</label>
{{Form::email('FatherEmail',null,['class'=>'form-control ','maxlength'=>'50','required'])}}

</div>
  <div class="form-group col-md-6">
<label for "FatherOccupation">Father's Occupation*</label>

  {{Form::text('FatherOccupation',null,['class'=>'form-control ','maxlength'=>'75','required'])}}

</div>
<div class="form-group col-md-12">
<label for "FatherCitizenship">Citizenship*</label>
<label class="radio-inline">
   {{Form::radio('FatherCitizenship','US Citizen',false,  ['id'=>'FatherCitizenship_0',  'required'])}}
US Citizen
</label>
                     <label class="radio-inline" for="FatherCitizenship_1">
                  {{Form::radio('FatherCitizenship','permanent resident',false,  ['id'=>'FatherCitizenship_1'])}}
                  Perm. Resident</label>
                     <label class="radio-inline" for="FatherCitizenship_2">
                     {{Form::radio('FatherCitizenship','other',false,  ['id'=>'FatherCitizenship_2'])}}
                     Other</label>
                     </div>
<div class="form-group col-md-12">
<label for "FatherCitizenship">If Other? What country?</label>
                     
  {{Form::text('FatherCitizenship1',null,['class'=>'form-control ','maxlength'=>'50'])}}                     
</div>

<div class="form-group col-md-12">

<label for="FatherReligiousStatus">Father's Religious Status*</label>
<label class="radio-inline">
  {{Form::radio('FatherReligiousStatus','Born Jewish',true,  ['id'=>'FatherReligiousStatus_0', 'required'])}}Born Jewish</label>
  
    
<label class="radio-inline">
  {{Form::radio('FatherReligiousStatus','Converted',false, ['id'=>'FatherReligiousStatus_1'])}}
  Converted</label>
  
<label class="radio-inline">
  {{Form::radio('FatherReligiousStatus','Not Jewish',false,  ['id'=>'FatherReligiousStatus_2'])}}
Not Jewish</label>
   </div>

<div class="form-group col-md-12">
<label for "FatherConversionRabbi">If converted, name of Rabbi</label>
  
{{Form::text('FatherConversionRabbi',null,['class'=>'form-control ','maxlength'=>'50'])}}                     
  </div>
  <div class="form-group col-md-12">
 <label for "FatherEdBackground"> Father's Jewish educational background</label>
 {{Form::textarea('FatherEdBackground',null,['class'=>'form-control '])}}                     

 </div>
 <?php 
$listethnicity = array(''=>'','American'=>'American','Israeli'=>'Israeli','Bukharian'=>'Bukharian','Russian'=>'Russian','Sefardi'=>'Sefardi','Other'=>'Other');
 ?>

 <div class="form-group col-md-12">
 <label for "FatherEthnicity">Father's Ethnicity*</label>
  {{Form::select('FatherEthnicity', $listethnicity, null,['class'=>'form-control ','required'])}}
 </div>
 <?php 
 $listaffiliation = array(''=>'','Reform'=>'Reform','Conservative'=>'Conservative','Traditional'=>'Traditional','Orthodox'=>'Orthodox','Daati'=>'Daati','Mesorati'=>'Mesorati','Chareidi'=>'Chareidi','Other'=>'Other');

  ?>
 
   <div class="form-group col-md-12">
<label for "FatherAffiliation">Father's Religious Affiliation*</label>
    {{Form::select('FatherAffiliation', $listaffiliation, null,['class'=>'form-control ','required'])}}
  </div>
    
 <div class="form-group col-md-12">
  <label for "FatherIntJudiasm">Are you interested in learning more about Judaism?*</label>
 <label class="radio-inline" for="FatherIntJudiasm_0">
  {{Form::radio('FatherIntJudiasm','1',true,  ['id'=>'FatherIntJudiasm_0','required'])}}
  Yes</label>
    <label class="radio-inline" for="FatherIntJudiasm_1">
    {{Form::radio('FatherIntJudiasm','0',false,  ['id'=>'FatherIntJudiasm_1'])}}No</label>
  </div></div>
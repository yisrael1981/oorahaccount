@extends('layout.main')
@section('content')
<h1>Tuition Form</h1>

@if(isset($application))
  {{Form::model($application, array('route'=>['form.update', $application->id],'id'=>'form1','name'=>'form1','novalidate', 'method'=>'put'))  }}
@else
  {!! Form::open(['method' => 'POST', 'url' => '/form', 'class' => 'form-horizontal', 'name'=>'form1','novalidate']) !!}
@endif

<div class="container" id="myWizard">
  <div class="navbar">
    <div class="navbar-inner">
      <ul class="nav nav-pills">
        <li class="active"><a href="#step1" data-toggle="tab">Student</a></li>

        <li><a href="#step2" data-toggle="tab">Father</a></li>
        <li><a href="#step3" data-toggle="tab">Mother</a></li>
        <li><a href="#step4" data-toggle="tab">Family</a></li>
        <li><a href="#step5" data-toggle="tab">School</a></li>
        <li><a href="#step6" data-toggle="tab">References</a></li>
        <li><input type="submit" value="Save for Later" ></li>
        <li><input type="button" value="Finished"  onclick="verify();"></li>
      </ul>
    </div>
  </div>
  
  <div class="tab-content">
    <div class="tab-pane active" id="step1">
    <h3>Student's Info</h3>
    @include('partial.step-student')
    </div>
    <div class="tab-pane " id="step2">
      <h3>Father's Info</h3>
      @include('partial.step-father')
    </div>
    <div class="tab-pane" id="step3">
      <h3>Mother's Info</h3>
      @include('partial.step-mother')
    </div>
    <div class="tab-pane" id="step4">
      <h3>Family Info</h3>
      @include('partial.step-family')
    </div>
    <div class="tab-pane" id="step5">
      <h3>School Info</h3>
      @include('partial.step-school')
    </div>
    <div class="tab-pane" id="step6">
      <h3>References</h3>
      @include('partial.step-reference')
    </div>

 
  {{Form::hidden('LoginId',null,['id'=>'LoginId'])}}
  {{Form::hidden('Completed',null ,['id'=>'Completed'])}}
  {{Form::hidden('Reapp','0')}}
  {{Form::hidden('PreAppId',null,['id'=>'PreAppId'])}}
  {{Form::hidden('ParentId',null,['id'=>'ParentId'])}}
    <ul class="pager wizard">

    <li class="previous"><a href="#">Previous</a></li>

    <li class="next"><a href="#">Next</a></li>
    </ul>

  </div>

<div>

{{Form::close()}}
<div align="center">Your application will not be processed until it is completed  and submitted  and we have received your child’s report card. <br />
Completing this application does not guarantee approval.</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap-wizard/1.2/jquery.bootstrap.wizard.min.js"></script>
<script>
$(document).ready(function() {
$('#myWizard').bootstrapWizard({onTabShow: function(tab, navigation, index) {
        
         if (index == 4) {
    //check if selected grade, otherwise, go back
  grade = $('#Grade').val();
  
  if (grade == "") {
        
alert("Please select current grade");
$('#myWizard a[href="#step1"]').tab('show') ;
$('#Grade').focus();
  }
  if (grade =="PHS") {

    $('#phsonly').show();
    $('#phsonly2').show();
  } else {
  $('#notphs').show();
  $('#notphs2').show();
  }
    if(grade == "8") {
     $('#eightdiv').show();

    }
    if(grade == "12") {
     $('#twelvegrdiv').show();

    }
  }//if 4 index
        }});
});
</script>
@stop
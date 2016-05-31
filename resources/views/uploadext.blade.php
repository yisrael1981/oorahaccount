<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" media="screen">
<div class="about-section">
   <div class="text-content">
     <div class="col-md-7 ">
      
	  
	@if(Session::has('record'))
<script>
	window.opener.document.getElementById('filename' + {!! Session::get('record') !!} ).value ='{!! Session::get('fileurl') !!} ';
	window.opener.document.getElementById('filecomplete' + {!! Session::get('record') !!} ).className ='glyphicon glyphicon-ok';

window.close();
</script>
@endif
	
        <div class="secure"><h1>Upload Photo </h1></div>
		<p>
Step 1: Browse to select a photo<br>

Step 2: Click submit to upload photo
</p>
        {!! Form::open(array('url'=>'uploadext','method'=>'POST', 'files'=>true)) !!}
        <?php
  if (isset($_GET['id']) ){

            session(['id' => $_GET['id']]);
          } 
        
         echo "<input type='hidden' name='record' value='" . session('id')."'>";  ?>
        
        
          <div class="controls">
          {!! Form::file('image') !!}   {!! Form::submit('Submit', array('class'=>'send-btn')) !!}
	  <p class="alert alert-error">{!!$errors->first('image')!!}</p>
	@if(Session::has('error'))
	<p class="alert alert-error">{!! Session::get('error') !!}</p>
	@endif

        
        </div>
       <div class="" style="padding:10px; ">
    
    </div> <div id="success"> </div>
      {!! Form::close() !!}

    </div>
   </div>
  </div>

<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" media="screen">
<div class="about-section">
   <div class="text-content">
     <div class="col-md-7 ">
      

        <div class="secure"><h1>Upload Photo of <?php echo session('type');?></h1></div>
		<p>
Step 1: Browse to select a photo<br>

Step 2: Click submit to upload photo
</p>
        {!! Form::open(array('url'=>'account/upload','method'=>'POST', 'files'=>true)) !!}
        <?php
  if (isset($_GET['record']) ){

            session(['record' => $_GET['record']]);
          } 
        
         echo "<input type='hidden' name='record' value='" . session('record')."'>";  ?>
        <?php
          if (isset($_GET['type']) ){

            session(['type' => $_GET['type']]);
          } 
         echo "<input type='hidden' name='type' value='" . session('type') .  "'>";  ?>
        
          <div class="controls">
          {!! Form::file('image') !!}
	  <p class="alert ">{!!$errors->first('image')!!}</p>

	@if(Session::has('error'))

	<p class="alert alert-danger">{!! Session::get('error') !!}</p>
	@endif

        
        </div>
       <div class="" style="padding:10px; ">
      {!! Form::submit('Submit', array('class'=>'send-btn')) !!}
    </div> <div id="success"> </div>
      {!! Form::close() !!}

    </div>
   </div>
  </div>


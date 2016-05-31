    <?php
//check to make sure user is logged in     
if (!isset($_COOKIE['Username']) || $_COOKIE['Username'] == ""){

       header('Location: http://www.oorah.org/tuition/loginopen.asp');
        }
//make sure if logged in matches the login on the account
 
 if ($_COOKIE["LoginId"] != $application->LoginId ) {

       header('Location: http://www.oorah.org/tuition/childlist2.asp'); 
      }


    ?>
    <!DOCTYPE html>
    <html>
      <head>
        <title>oorah's Tuition Application</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Bootstrap -->
        <link rel="stylesheet" href="{{asset('css/main.css')}}">
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" media="screen">
        <script src="//code.jquery.com/jquery.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
      </head>
      <body>
<div class='container'>
      <h1>@yield('sectionname')</h1>

    @if (Session::has('message'))
<div class="alert alert-success">
{{{ Session::get('message') }}}
</div>
@endif 

@if (count($errors))
    <ul class="alert alert-success">
        @foreach($errors->all() as $error)
               <li>{{ $error }}</li>
        @endforeach
    </ul>
@endif


       @yield('content')
       </div>
<footer></footer>       
 <script  src="{{asset('js/verify.js')}}">    </script>
      </body>
    </html>

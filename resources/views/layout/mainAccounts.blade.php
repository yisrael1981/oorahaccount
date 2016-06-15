
    <!DOCTYPE html>
    <html>
      <head>
        <title>oorah's Account Management Application</title>
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
 <script  src="{{asset('js/accounts.js')}}">    </script>
      </body>
    </html>

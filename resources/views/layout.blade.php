<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <title>Intel Bin</title>
    
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('/css/style.css')}}">
    
    <script src="{{ asset('/js/script.js') }}">
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
</head>
<body>
   <div id="mySidenav" class="sidenav">
       <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times; </a>
       <a href="/">Página Inicial</a>
       <a href="/home">Login</a>
       <a href="/caixotes">Caixotes</a>
   </div>
   
   <!-- Use any element to open the sidenav -->
   <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;open</span>
   
   <!-- Add all page content inside this div if you want the side nav to push page content to the right (not used if you only want the sidenav to sit on top of the page -->
    <div id="main">
        <div class="col-md-8 col-md-offset-2">
           <h1>Intel Bin</h1>
        </div>
            @yield('content')
    </div>
</body>
</html>
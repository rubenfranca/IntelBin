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
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
    
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
           @if(Auth::guest())
           <a href="/home">Login</a>
           @endif
           <a onclick="myAccFunc('edificios')">Edificios<i class="fa fa-caret-down"></i></a>
                  <div id="edificios" class="w3-hide w3-grey w3-card">
                  @foreach($edificios as $edificio)
                      <a href="/edificios/{{$edificio->id}}">{{$edificio->nome}}</a>
                  @endforeach
                   </div>
           
           
           @if(Auth::check() && Auth::user()->tipo_id == '2')
                 <a onclick="myAccFunc('demoAcc')">BackOffice<i class="fa fa-caret-down"></i></a>
                  <div id="demoAcc" class="w3-hide w3-grey w3-card">
                       <a href="/BoCaixote">Caixotes</a>
                       <a href="/BoEdificio">Edificios</a>
                       <a href="/BoFuncionario">Funcionários</a>
                       <a href="/BoLocal">Locais</a>
                       <a href="/BoPiso">Pisos</a>
                       <a href="/BoRecolha">Recolhas</a>
                       <a href="/BoListagens">Listagens</a>
                       <a href="/BoProblema">Problemas</a>
                       <!--<a href="">Utilizadores</a> -->
                   </div>
            @endif
            @if(Auth::check())
           <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">{{ csrf_field() }}</form>
            @endif
       
   </div>
   
   <!-- Use any element to open the sidenav -->
   <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;IntelBin</span>
   
   <!-- Add all page content inside this div if you want the side nav to push page content to the right (not used if you only want the sidenav to sit on top of the page -->
    <div id="main">
        <div class="col-md-8 col-md-offset-2">

        </div>
            @yield('content')
    </div>
</body>
</html>
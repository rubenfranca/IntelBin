<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Intel Bin</title>
    
    <link rel="stylesheet" href="{{ asset('/css/style.css')}}">
    
    <script src="{{ asset('/js/script.js') }}"></script>
</head>
<body>
   <div id="mySidenav" class="sidenav">
       <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times; </a>
       <a href="#">Página 1</a>
       <a href="#">Página 2</a>
       <a href="#">Página 3</a>
   </div>
   
   <!-- Use any element to open the sidenav -->
   <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;open</span>
   
   <!-- Add all page content inside this div if you want the side nav to push page content to the right (not used if you only want the sidenav to sit on top of the page -->
    <div id="main">
        @yield('content')
    </div>
</body>
</html>
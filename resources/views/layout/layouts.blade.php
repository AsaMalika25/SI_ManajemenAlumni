<!DOCTYPE html>
<html lang="en">
<head>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite(['resources/sass/app.scss','resources/js/app.js'])
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!-- <link href="css/bootstrap.css" rel="stylesheet"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="{{asset('css/styleside.css')}}" rel="stylesheet">
    <!-- <link rel="stylesheet" type="text/css" href="{!! ('public/css/styleside.css') !!}"> -->
    <link rel="stylesheet" type="text/css" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
    
    <style>
        body{
            background-color: #688EF2;
            height: 100%;
        }
    </style> 
</head>
<body>
<nav class="main-menu" style="z-index:999" > 
            <div>
                <a class="logo" href="">
                </a> 
              </div> 
            <div class="settings"></div>
            <div class="scrollbar" id="style-1">
            <ul>
            <li>                                   
                <a href="">
                <img src="{{asset('img/3966983-removebg-preview.png')}}" class="justify-content-center" style="max-height: 40px;">
                <span class="justify-content-center ms-4">Welcome to SIMA!</span>
                </a>
                </li>  
            <li>                                   
                <a href="">
                <i class="fa fa-home fa-lg"></i>
                <span class="nav-text">Dashboard</span>
                </a>
            </li>

            <li>                                 
                <a href="{{url('alumni')}}">
                <i class="fa fa-graduation-cap fa-lg"></i>
                <span class="nav-text">Kelola Alumni</span>
                </a>
            </li>
             
            
                
                
           @if (Auth::user()->role == 'superadmin')
            <li>                                 
                <a href="">
                <i class="fa fa-user fa-lg"></i>
                <span class="nav-text">Kelola Akun</span>
                </a>
            </li>
            
            <li>                                 
                <a href="">
                <i class="fa fa-align-left fa-lg"></i>
                <span class="nav-text">LOG</span>
                </a>
            </li>

           @endif
               
            <!-- <ul class="logout"> -->
            <li>
                <a href="berita">
                <i class="fa fa-lightbulb-o fa-lg"></i>
                <span class="nav-text">Kelola Berita</span> 
                 </a>
            </li>  

            <li>
                <a href="jenis_berita">
                <i class="fa fa-lightbulb-o fa-lg"></i>
                <span class="nav-text">Kelola Jenis Berita</span> 
                 </a>
            </li>  

            <li>
                <a href="{{url('logout')}}">
                <i class="fa fa-right-from-bracket"></i>
                <span class="nav-text">Logout</span> 
                 </a>
            </li>  
            <hr>
            </ul>
            <li>
            <div class="dropdown" style="margin: 5%;">
                <a href="#" class="d-flex align-items-center text-decoration-none" id="dropdownUser2" data-bs-toggle="dropdown" aria-expanded="false">
                  <img src="https://github.com/mdo.png" alt="" width="32" height="32" class="rounded-circle me-2">
                  <strong style="padding: 1%">Adhinda</strong>
                </a>
                <!-- <ul class="dropdown-menu text-small shadow" style="max-width: 30px;" aria-labelledby="dropdownUser2">
                  <li><a class="dropdown-item" href="#">New project...</a></li>
                  <li><a class="dropdown-item" href="#">Settings</a></li>
                  <li><a class="dropdown-item" href="#">Profile</a></li>
                  <hr>
                  <li><a class="dropdown-item" href="#">Sign out</a></li>
                </ul> -->
              </div>
            </li>
</nav>

<div class="container">
    @yield('content')
</div>


</body>

</html>
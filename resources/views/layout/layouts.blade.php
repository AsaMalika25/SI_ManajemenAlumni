<!DOCTYPE html>
<html lang="en">
<head>
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
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" rel="stylesheet">
    
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
                <img src="{{asset('img/3966983-removebg-preview.png')}}" class="justify-content-center" style="max-height: 40px;">
                <span class="justify-content-center"><b>Welcome to SIMA!</b></span>
                
            </li>  
            <li>                                   
                <a href="{{url('dashboard')}}">
                <i class="fa fa-home fa-lg"></i>
                <span class="nav-text">Dashboard</span>
                </a>
            </li>
            
           @if (Auth::user()->role == 'superadmin')
            <li>                                 
                <a href="{{url('alumni')}}"  style="height: 30px;">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-people-fill" viewBox="0 0 16 16" style="margin-left: 24%; ">
                <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7Zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm-5.784 6A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.220ZM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5Z"/>
                </svg>
                <span class="nav-text">Kelola Alumni</span>
                </a>
            </li> 
            <li>                                 
                <a href="{{url('list_akun')}}"  style="height: 30px;">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16" style="margin-left: 24%;">
                <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3Zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z"/>
                </svg>
                <span class="nav-text">Kelola Akun</span>
                </a>
            </li>

            <li>
                <a href="{{url('berita')}}">
                <i class="fa fa-lightbulb-o fa-lg"></i>
                <span class="nav-text">Kelola Berita</span> 
                </a>
            </li>
            
            <li>                                 
                <a href="{{url('angkatan')}}" style="height: 30px;">
                <svg xmlns="http://www.w3.org/2000/svg" widht="20" height="20" fill="currentColor" class="bi bi-people-fill" viewBox="0 0 16 16" style="margin-left: 24%;">
                <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7Zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm-5.784 6A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216ZM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5Z"/>
                </svg>
                <span class="nav-text">Kelola Angkatan</span>
                </a>
            </li>

            <li>                                 
                <a href="{{url('kelas')}}" style="height: 30px;">
                <svg xmlns="http://www.w3.org/2000/svg" widht="20" height="20" fill="currentColor" class="bi bi-bank2" viewBox="0 0 16 16" style="margin-left: 24%;">
                <path d="M8.277.084a.5.5 0 0 0-.554 0l-7.5 5A.5.5 0 0 0 .5 6h1.875v7H1.5a.5.5 0 0 0 0 1h13a.5.5 0 1 0 0-1h-.875V6H15.5a.5.5 0 0 0 .277-.916l-7.5-5zM12.375 6v7h-1.25V6h1.25zm-2.5 0v7h-1.25V6h1.25zm-2.5 0v7h-1.25V6h1.25zm-2.5 0v7h-1.25V6h1.25zM8 4a1 1 0 1 1 0-2 1 1 0 0 1 0 2zM.5 15a.5.5 0 0 0 0 1h15a.5.5 0 1 0 0-1H.5z"/>
                </svg>
                <span class="nav-text">Kelola Kelas</span>
                </a>
            </li>

            <li>                                 
                <a href="{{url('jurusan')}}" style="height: 30px;">
                <svg xmlns="http://www.w3.org/2000/svg" widht="20" height="20" fill="currentColor" class="bi bi-clipboard-data-fill" viewBox="0 0 16 16" style="margin-left: 24%;">
                <path d="M6.5 0A1.5 1.5 0 0 0 5 1.5v1A1.5 1.5 0 0 0 6.5 4h3A1.5 1.5 0 0 0 11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3Zm3 1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5h3Z"/>
                <path d="M4 1.5H3a2 2 0 0 0-2 2V14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3.5a2 2 0 0 0-2-2h-1v1A2.5 2.5 0 0 1 9.5 5h-3A2.5 2.5 0 0 1 4 2.5v-1ZM10 8a1 1 0 1 1 2 0v5a1 1 0 1 1-2 0V8Zm-6 4a1 1 0 1 1 2 0v1a1 1 0 1 1-2 0v-1Zm4-3a1 1 0 0 1 1 1v3a1 1 0 1 1-2 0v-3a1 1 0 0 1 1-1Z"/>
                </svg>
                <span class="nav-text">Kelola Jurusan</span>
                </a>
            </li>

            <li>                                 
                <a href="{{url('log')}}">
                <i class="fa fa-align-left fa-lg"></i>
                <span class="nav-text">LOG</span>
                </a>
            </li>

           @endif
               
            <!-- <ul class="logout"> -->
            @if (Auth::user()->role == 'kaprog')
                <li>                                 
                    <a href="{{url('alumni')}}">
                    <i class="fa fa-graduation-cap fa-lg"></i>
                    <span class="nav-text">Kelola Alumni</span>
                    </a>
                </li>
                    <li>
                        <a href="{{url('berita')}}">
                        <i class="fa fa-lightbulb-o fa-lg"></i>
                        <span class="nav-text">Kelola Berita</span> 
                        </a>
                    </li>
                    
                    <li>
                        <a href="{{url('jenis_berita')}}">
                        <i class="fa fa-lightbulb-o fa-lg"></i>
                        <span class="nav-text">Kelola Jenis Berita</span> 
                        </a>
                    </li>
            @endif
              
            @if (Auth::user()->role == 'alumni')
                <li>                                 
                    <a href="{{url('data-alumni')}}">
                    <i class="fa fa-graduation-cap fa-lg"></i>
                    <span class="nav-text">Daftar Alumni</span>
                    </a>
                </li>
                <li>
                    <a href="{{url('berita-alumni')}}">
                    <i class="fa fa-lightbulb-o fa-lg"></i>
                    <span class="nav-text">Berita</span> 
                    </a>
                </li>
                <li>                                 
                    <a href="{{url('angkatan')}}" style="height: 30px;">
                    <svg xmlns="http://www.w3.org/2000/svg" widht="20" height="20" fill="currentColor" class="bi bi-people-fill" viewBox="0 0 16 16" style="margin-left: 24%;">
                    <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7Zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm-5.784 6A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216ZM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5Z"/>
                    </svg>
                    <span class="nav-text">Kelola Angkatan</span>
                    </a>
                </li>
    
                <li>                                 
                    <a href="{{url('kelas')}}" style="height: 30px;">
                    <svg xmlns="http://www.w3.org/2000/svg" widht="20" height="20" fill="currentColor" class="bi bi-bank2" viewBox="0 0 16 16" style="margin-left: 24%;">
                    <path d="M8.277.084a.5.5 0 0 0-.554 0l-7.5 5A.5.5 0 0 0 .5 6h1.875v7H1.5a.5.5 0 0 0 0 1h13a.5.5 0 1 0 0-1h-.875V6H15.5a.5.5 0 0 0 .277-.916l-7.5-5zM12.375 6v7h-1.25V6h1.25zm-2.5 0v7h-1.25V6h1.25zm-2.5 0v7h-1.25V6h1.25zm-2.5 0v7h-1.25V6h1.25zM8 4a1 1 0 1 1 0-2 1 1 0 0 1 0 2zM.5 15a.5.5 0 0 0 0 1h15a.5.5 0 1 0 0-1H.5z"/>
                    </svg>
                    <span class="nav-text">Kelola Kelas</span>
                    </a>
                </li>
    
                <li>                                 
                    <a href="{{url('jurusan')}}" style="height: 30px;">
                    <svg xmlns="http://www.w3.org/2000/svg" widht="20" height="20" fill="currentColor" class="bi bi-clipboard-data-fill" viewBox="0 0 16 16" style="margin-left: 24%;">
                    <path d="M6.5 0A1.5 1.5 0 0 0 5 1.5v1A1.5 1.5 0 0 0 6.5 4h3A1.5 1.5 0 0 0 11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3Zm3 1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5h3Z"/>
                    <path d="M4 1.5H3a2 2 0 0 0-2 2V14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3.5a2 2 0 0 0-2-2h-1v1A2.5 2.5 0 0 1 9.5 5h-3A2.5 2.5 0 0 1 4 2.5v-1ZM10 8a1 1 0 1 1 2 0v5a1 1 0 1 1-2 0V8Zm-6 4a1 1 0 1 1 2 0v1a1 1 0 1 1-2 0v-1Zm4-3a1 1 0 0 1 1 1v3a1 1 0 1 1-2 0v-3a1 1 0 0 1 1-1Z"/>
                    </svg>
                    <span class="nav-text">Kelola Jurusan</span>
                    </a>
                </li>
            @endif
            

            <li>
                <a href="{{url('logout')}}">
                <i class="fa fa-right-from-bracket"></i>
                <span class="nav-text">Logout</span> 
                 </a>
            </li>  
            <hr>
            </ul>

            <div class="dropdown" style="margin: 5%;">
                <a href="#" class="d-flex align-items-center text-decoration-none" id="dropdownUser2" data-bs-toggle="dropdown" aria-expanded="false">
                  <img src="{{asset('img/3966983-removebg-preview.png')}}" alt="" width="32" height="32" class="rounded-circle me-2">
                  <strong style="padding: 1%">Adhinda</strong>
                </a>
            
              </div>
            </li>
</nav>

<div class="container">
    @yield('content')
</div>


</body>

</html>
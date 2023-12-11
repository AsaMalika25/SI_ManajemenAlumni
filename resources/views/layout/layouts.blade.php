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
        }
    </style> 
</head>
<body>
<nav class="main-menu" style="z-index:9; height: 108%;" > 
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

            
           @if (Auth::user()->role == 'superadmin')
            <li>                                   
                <a href="{{url('dashboard')}}">
                <i class="fa fa-home fa-lg"></i>
                <span class="nav-text">Dashboard</span>
                </a>
            </li>
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
                <a href="{{url('kaprog')}}"  style="height: 30px;">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-vcard-fill" viewBox="0 0 16 16" style="margin-left: 18px;">
                <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm9 1.5a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 0-1h-4a.5.5 0 0 0-.5.5M9 8a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 0-1h-4A.5.5 0 0 0 9 8m1 2.5a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 0-1h-3a.5.5 0 0 0-.5.5m-1 2C9 10.567 7.21 9 5 9c-2.086 0-3.8 1.398-3.984 3.181A1 1 0 0 0 2 13h6.96c.026-.163.04-.33.04-.5M7 6a2 2 0 1 0-4 0 2 2 0 0 0 4 0"/>
                </svg>
                <span class="nav-text">Kelola Kaprog</span>
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
                <svg xmlns="http://www.w3.org/2000/svg" widht="20" height="20" fill="currentColor" class="bi bi-bank2" viewBox="0 0 16 16" style="margin-left: 16px;">
                <path d="M8.277.084a.5.5 0 0 0-.554 0l-7.5 5A.5.5 0 0 0 .5 6h1.875v7H1.5a.5.5 0 0 0 0 1h13a.5.5 0 1 0 0-1h-.875V6H15.5a.5.5 0 0 0 .277-.916l-7.5-5zM12.375 6v7h-1.25V6h1.25zm-2.5 0v7h-1.25V6h1.25zm-2.5 0v7h-1.25V6h1.25zm-2.5 0v7h-1.25V6h1.25zM8 4a1 1 0 1 1 0-2 1 1 0 0 1 0 2zM.5 15a.5.5 0 0 0 0 1h15a.5.5 0 1 0 0-1H.5z"/>
                </svg>
                <span class="nav-text">Kelola Kelas</span>
                </a>
            </li>

            <li>                                 
                <a href="{{url('jurusan')}}" style="height: 30px;">
                <svg xmlns="http://www.w3.org/2000/svg" widht="20" height="20" fill="currentColor" class="bi bi-clipboard-data-fill" viewBox="0 0 16 16" style="margin-left: 15px;">
                <path d="M6.5 0A1.5 1.5 0 0 0 5 1.5v1A1.5 1.5 0 0 0 6.5 4h3A1.5 1.5 0 0 0 11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3Zm3 1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5h3Z"/>
                <path d="M4 1.5H3a2 2 0 0 0-2 2V14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3.5a2 2 0 0 0-2-2h-1v1A2.5 2.5 0 0 1 9.5 5h-3A2.5 2.5 0 0 1 4 2.5v-1ZM10 8a1 1 0 1 1 2 0v5a1 1 0 1 1-2 0V8Zm-6 4a1 1 0 1 1 2 0v1a1 1 0 1 1-2 0v-1Zm4-3a1 1 0 0 1 1 1v3a1 1 0 1 1-2 0v-3a1 1 0 0 1 1-1Z"/>
                </svg>
                <span class="nav-text">Kelola Jurusan</span>
                </a>
            </li>

            <li>                                 
                <a href="{{url('wirausaha')}}" style="height: 35px;">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cash-coin" viewBox="0 0 16 16" style="margin-left: 18px; margin-top:7px">
                <path fill-rule="evenodd" d="M11 15a4 4 0 1 0 0-8 4 4 0 0 0 0 8m5-4a5 5 0 1 1-10 0 5 5 0 0 1 10 0"/>
                <path d="M9.438 11.944c.047.596.518 1.06 1.363 1.116v.44h.375v-.443c.875-.061 1.386-.529 1.386-1.207 0-.618-.39-.936-1.09-1.1l-.296-.07v-1.2c.376.043.614.248.671.532h.658c-.047-.575-.54-1.024-1.329-1.073V8.5h-.375v.45c-.747.073-1.255.522-1.255 1.158 0 .562.378.92 1.007 1.066l.248.061v1.272c-.384-.058-.639-.27-.696-.563h-.668zm1.36-1.354c-.369-.085-.569-.26-.569-.522 0-.294.216-.514.572-.578v1.1h-.003zm.432.746c.449.104.655.272.655.569 0 .339-.257.571-.709.614v-1.195l.054.012z"/>
                <path d="M1 0a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h4.083c.058-.344.145-.678.258-1H3a2 2 0 0 0-2-2V3a2 2 0 0 0 2-2h10a2 2 0 0 0 2 2v3.528c.38.34.717.728 1 1.154V1a1 1 0 0 0-1-1z"/>
                <path d="M9.998 5.083 10 5a2 2 0 1 0-3.132 1.65 5.982 5.982 0 0 1 3.13-1.567z"/>
                </svg>
                <span class="nav-text">Kelola wirausaha</span>
                </a>
            </li>

            <li>                                 
                <a href="{{url('kuliah')}}" style="height: 30px;">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-mortarboard-fill" viewBox="0 0 16 16" style="margin-left: 24%;">
                <path d="M8.211 2.047a.5.5 0 0 0-.422 0l-7.5 3.5a.5.5 0 0 0 .025.917l7.5 3a.5.5 0 0 0 .372 0L14 7.14V13a1 1 0 0 0-1 1v2h3v-2a1 1 0 0 0-1-1V6.739l.686-.275a.5.5 0 0 0 .025-.917l-7.5-3.5Z"/>
                <path d="M4.176 9.032a.5.5 0 0 0-.656.327l-.5 1.7a.5.5 0 0 0 .294.605l4.5 1.8a.5.5 0 0 0 .372 0l4.5-1.8a.5.5 0 0 0 .294-.605l-.5-1.7a.5.5 0 0 0-.656-.327L8 10.466z"/>
                </svg>
                <span class="nav-text">Kelola Kuliah</span>
                </a>
            </li>

            <li>                                 
                <a href="{{url('kerja')}}" style="height: 30px;">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-suitcase-lg-fill" viewBox="0 0 16 16" style="margin-left: 24%;">
                <path d="M7 0a2 2 0 0 0-2 2H1.5A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14H2a.5.5 0 0 0 1 0h10a.5.5 0 0 0 1 0h.5a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2H11a2 2 0 0 0-2-2zM6 2a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1zM3 13V3h1v10zm9 0V3h1v10z"/>
                </svg>
                <span class="nav-text">Kelola Kerja</span>
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
                    <a href="{{url('dashboard')}}">
                    <i class="fa fa-home fa-lg"></i>
                    <span class="nav-text">Dashboard</span>
                    </a>
                </li>
                <li>                                 
                    <a href="{{url('data-alumni-kaprog')}}">
                    <i class="fa fa-graduation-cap fa-lg"></i>
                    <span class="nav-text">Daftar Alumni</span>
                    </a>
                </li>
                    <li>
                        <a href="{{url('berita')}}">
                        <i class="fa fa-lightbulb-o fa-lg"></i>
                        <span class="nav-text">Kelola Berita</span> 
                        </a>
                    </li>
            @endif
              
            @if (Auth::user()->role == 'alumni')
                <li>                                   
                    <a href="{{url('dashboard')}}">
                    <i class="fa fa-home fa-lg"></i>
                    <span class="nav-text">Dashboard</span>
                    </a>
                </li>
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
            @endif
            

            <li>
                <a href="{{url('logout')}}">
                <i class="fa fa-right-from-bracket"></i>
                <span class="nav-text">Logout</span> 
                 </a>
            </li>  
            <hr>
            </ul>
            
            
            </li>
</nav>

<header>
    <div class="col-md-12">
        <div class="row">
            <div class="col-md-7"></div>
            <div class="col-md-3"></div>
            <div class="col-md-1">
                <div class="dropdown" style="margin: 10px;">
                    {{-- @foreach ($alumni as $item) --}}
                        <a href="{{url('profile')}}" class="d-flex  text-decoration-none" id="dropdownUser2">
                            <img src="{{asset('img/3966983-removebg-preview.png')}}" alt="" width="32" height="32" class="rounded-circle me-2">
                            <strong style="padding: 1px; margin-left: 12px; color:#fff">{{{Auth::user()->username}}}</strong>
                        </a>        
                    {{-- @endforeach --}}
                    
                </div>
            </div>
        </div>
    </div>
    
</header>



<div class="container">
    @yield('content')
</div>

   
</body>


</html>
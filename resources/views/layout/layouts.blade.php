<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!-- <link href="css/bootstrap.css" rel="stylesheet"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="{{('public/css/styleside.css')}}" rel="stylesheet">
    <!-- <link rel="stylesheet" type="text/css" href="{!! ('public/css/styleside.css') !!}"> -->
    <link rel="stylesheet" type="text/css" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
    <style>
        body{
            background-color: #688EF2;
        }
    </style> 
</head>
<body>
<nav class="main-menu"> 
            <div>
                <a class="logo" href="">
                </a> 
              </div> 
            <div class="settings"></div>
            <div class="scrollbar" id="style-1">
            <ul>
            <li>                                   
                <a href="">
                <img src="img/3966983-removebg-preview.png" class="justify-content-center" style="max-height: 40px;">
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
                <a href="">
                <i class="fa fa-align-left fa-lg"></i>
                <span class="nav-text">Kelola Alumni</span>
                </a>
            </li> 
            <li>                                 
                <a href="">
                <i class="fa fa-user fa-lg"></i>
                <span class="nav-text">Kelola Akun</span>
                </a>
            </li>   
            <!-- <ul class="logout"> -->
            <li>
                <a href="">
                <i class="fa fa-lightbulb-o fa-lg"></i>
                <span class="nav-text">Kelola Berita</span> 
                 </a>
            </li>  
            </ul>
        </nav>
        @yield('content')

</body>
</html>
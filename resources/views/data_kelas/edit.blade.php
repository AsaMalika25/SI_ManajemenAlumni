<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="google" value="notranslate"/>
    <title>Document</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!-- <link href="css/bootstrap.css" rel="stylesheet"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="css/styleside.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
    <style>
        body{
            background-color: #688EF2;
        }
    </style> 
</head>
<body>
      
        <!-- header -->
        <div class="header">
          <!-- logo -->
          <div class="justify-content-center" style=" position: relative;">
            <img src="img/pict-gedung.jpg" class="rounded-circle me-4" style="height: 7vh; float: right; width: 7vh; margin-top: -2.1vh; " alt="gambar error" />
          </div>
          <!-- <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16" style="float: left;  margin-top: -2.1vh;">
            <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
          </svg> -->
          <!-- <div class="justify-content-center" style=" position: relative;">
            <img src="img/list.svg" class="rounded-circle me-0" style="height: 7vh; float: left; width: 7vh; margin-top: -2.1vh; " alt="gambar error" />
          </div> -->
          <!-- end logo -->
        </div>
        
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
                    
    <!-- konten utama -->
    <!-- div one page -->
    <div class="card" style="width: 85.86762075134168vh; margin:auto; border-radius: 2.862254025044723vh; margin-top: 2rem; margin-bottom: 14.311270125223613vh;">
        <div class="card-body">
          <!-- text judul   -->
          <div class="text-center">
            <h1 class="h4 text-gray-900 mb-4 font-nav">Form Tambah Akun</h1>
            <br>
          </div>
          <!-- end text judul -->
    
          <!-- form tambah -->
          <form action="/tambah" method="post">
            <div class="mb-3" >
              <label for="inputNama" class="form-label font-form">Username</label>
              <input type="text" class="form-control" id="inputNama" name="nama" style="border-radius:  1.8635607321131447vh;" value="{{$tbl_user->id_user}}" required>
            </div> 
            <div class="form-group">
              <label>Password :</label>
              <input type="password" class="form-control font-form" name="password" name="nama" style="border-radius:  1.8635607321131447vh;" value="{{$tbl_user->password}}"/>
            </div>

            <div class="form-group">
              <label>Role</label><br>
              <select name="role" id="role" class="form-control" value="{{$tbl_user->role}}">
                <option>SuperAdmin</option>
                <option>Kaprog</option>
                <option>Alumni</option>
              </select>
            </div>
            <button type="submit" class="btn btn-primary" style="font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;">Submit</button>
          </form>
          <!-- end form tambah -->
        </div>
      </div>
        <!-- end konten utama -->
      </div> 
      <!-- end one page -->  
</body>
</html>
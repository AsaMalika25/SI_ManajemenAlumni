<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="google" value="notranslate"/>
    <title>Document</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link href="{{asset('css/bootstrap.css')}}" rel="stylesheet">
    <link href="{{asset('css/styleside.css')}}" rel="stylesheet">
    {{-- <link rel="stylesheet" type="text/css" href="css/menu.css"> --}}
    <link rel="stylesheet" type="text/css" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
    <style>
        body{
            background-color: #688EF2;
        }
    </style>
</head>
<body>
    <div class="container d-flex justify-content-center" style="margin-top: 3.5%; margin-bottom: 10px; vertical-align: middle;">
        <div class="card" style="width: 25rem;">
            <div class="card-body" style="align-items: center;">
               
                        <form method="post" action="{{url('login')}}">
                            @csrf
                        <div class="row d-flex items-center">
                            <div class="ms-6">
                                <div class="form-group justify-content-center ms-3" ><br>
                                    <img src="img/3966983-removebg-preview.png" style="height: 150px;"> 
                                </div>
                                <span class="h1 ms-6"><b>
                                    LOGIN
                                </b>
                                </span>
                                <div class="form-group"><br>
                                    <label>Username</label>
                                    <input type="text" class="form-control" style="width: 250px;" name="username" />
                                </div>
                                <div class="form-group"><br>
                                    <label>Password</label>
                                    <input type="password" class="form-control" style="width: 250px;" name="password" />
                                    </div>
                                <!-- <div class="form-group mt-2"><br> -->
                                    <!-- <label>Role</label>
                                    <select name="role" id="role" class="form-control">
                                        <option value="admin">Admin</option>
                                        <option value="operator" class="form-control">Operator</option>
                                    </select> -->
                          
                                <!-- </div> -->
                                <br>
                            </div>
                            </div>
                            <div class="row">
                            <div class="col-md-4" style="margin-left: 9rem;">
                                <button type="submit" class="btn btn-success">LOGIN</button>
                            </div>
                            <p>
                        </div>
                        </form>
            </div>
          </div>
    </div>
</body>
</html>
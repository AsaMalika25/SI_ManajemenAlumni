<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="container mt-5 align-item-center" style="background-repeat: no-repeat; background-size: cover; background-position: center;">
        <h1 class="d-flex justify-content-center" style="color: #fff; font-family: poppins;"><b>LIST AKUN</b></h1>
        <br>
       
          <div class="tab-content" id="pills-tabContent">   
           
                <div class="card" style="width: 130; margin:auto; border-radius: 2.862254025044723vh; margin-bottom: 14.311270125223613vh;" >
                    <div class="card-body">  
          
                      <!-- tabel -->
                      <table class="table DataTable">
                        <!-- head tabel -->
                        <thead>
                          <tr>
                          <th class="font-table" scope="col">Id</th>
                            <th class="font-table" scope="col">Username</th>
                            <th class="font-table" scope="col">Password</th>
                            <th class="font-table" scope="col">Role</th>
                          </tr>
                        </thead>
                        <!-- end head tabel -->
          
                        <!-- body tabel -->
                        <tbody>
                          <tr></tr>
                          @foreach($akun as $r)
                          <tr>  
                            <th scope="row">{{$r->id_akun}}</th>
                            <td>{{$r->username}}</td>
                            <td>{{$r->password}}</td>
                            <td>{{$r->role}}</td>
                            
                            <!-- <td><a href=""><img src="/img/icons8-edit-30.png" alt="gambar error"></a></td> -->
                            <!-- <td><a href=""><img src="/img/icons8-delete-30.png" alt="gambar error"></a></td> -->
                          </tr>
                          @endforeach
                        </tbody>
                        <!-- end body tabel -->
                      </table>
                      <!-- end tabel -->
                    </div>
                </div>
                
              </div>
            </div>
          </div>
        <!-- end konten utama -->
      </div>
</body>
</html>
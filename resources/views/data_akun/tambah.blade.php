@extends('layout.layouts')
@section('content')  
    <!-- konten utama -->
    <!-- div one page -->

        <!-- form tambah -->
      <div class="container d-flex justify-content-center" style="margin-top: 7%; vertical-align: middle;">
      <div class="card d-flex justify-content-center" style="width: 25rem; border-radius: 15px;">
        <div class="card-body" style="align-items: center;">
         
            <div class="text-center">
              <h1 class="h4 text-gray-900 font-nav" style="color: black"><b>Form Tambah Akun</b></h1>
              <br>
            </div>
          <form action="tambah_akun/tambah" method="post">
            @csrf
            <div class="mb-3" >
              <label for="inputNama" class="form-label font-form">Username</label>
              <input type="text" class="form-control" id="inputNama" placeholder="Your Username" name="username" style="border-radius:  1.8635607321131447vh;" required>
            </div>
            <div class="form-group mb-3">
              <label>Password</label>
              <input type="password" class="form-control font-form" placeholder="Your Password" name="password" name="nama" style="border-radius:  1.8635607321131447vh;"/>
            </div>
            <div class="form-group">
              <label>Role</label><br>
              <select name="role" id="role" class="form-control"> 
                <option disabled selected>Your Role</option>
                <option value="superadmin">Super Admin</option>
                <option value="kaprog">Kaprog</option>
                <option value="alumni">Alumni</option>
              </select>
            </div>
            <br>
            <div class="form-group mb-3">
              <label>Upload Profile</label>
              <input type="file" class="form-control font-form" placeholder="Your Profile" name="profile" style="border-radius:  1.8635607321131447vh;"/>
            </div>

            <div class="col"> 
              <a href="list_akun" class="btn btn-warning" style="font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;  margin-top: 1rem;">Kembali</a>
              <button type="submit" class="btn btn-primary" style="font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif; margin-top: 1rem;">Simpan</button>
            </div>
          </form>  
     
        </div>
      </div>
      </div>
@endsection
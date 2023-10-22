@extends('layout.layouts')
@section('content')  
    <!-- konten utama -->
    <!-- div one page -->

          <!-- form tambah -->
          <div class="container" style="margin-top: 3rem;">
            <!-- text judul   -->
            <!-- form tambah -->
          <div class="text-center">
            <h1 class="h4 text-gray-900 font-nav" style="color: white"><b>Form Tambah</b></h1>
            <br>
          </div>
          <!-- end text judul -->
          <form action="tambah_akun/tambah" method="post">
            <div class="mb-3" >
              <label for="inputNama" class="form-label font-form">Username</label>
              <input type="text" class="form-control" id="inputNama" placeholder="username" name="username" style="border-radius:  1.8635607321131447vh;" required>
            </div>
            <div class="form-group">
              <label>Password :</label>
              <input type="password" class="form-control font-form" placeholder="password" name="password" name="nama" style="border-radius:  1.8635607321131447vh;"/>
            </div>
            <div class="form-group">
              <label>Role</label><br>
              <select name="role" id="role" class="form-control">
                
                <option disabled selected>Pilih Role</option>
                <option value="superadmin">Super Admin</option>
                <option value="kaprog">Kaprog</option>
                <option value="alumni">Alumni</option>
              </select>
            </div>
            <div class="form-group mt-2">
                            <label>File</label>
                                <input type="file" class="form-control" name="file">
                            </div>
                            @csrf
                <div class="col"> 
                    <button type="submit" class="btn btn-primary" style="font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif; margin-top: 1rem;">Simpan</button>
                  </div>
              </div>
        </form>  
    </div>
          <!-- end form tambah -->
        </div>
      </div>
        <!-- end konten utama -->
      </div> 
      <!-- end one page -->  
@endsection
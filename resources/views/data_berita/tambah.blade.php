@extends('layout.layouts')
@section('content')  
    <!-- konten utama -->
    <!-- div one page -->

          <!-- form tambah -->
          <div class="container" style="margin-top: 3rem;">
            <!-- text judul   -->
            <!-- form tambah -->
        <form action="/tambah" method="post">
          <div class="text-center">
            <h1 class="h4 text-gray-900 font-nav" style="color: white"><b>Form Tambah</b></h1>
            <br>
          </div>
          <!-- end text judul -->
            <div class="row">
                <div class="col"> 
                  <label style="color: #fff;">Id_admin</label>
                  <input type="text" class="form-control" placeholder="" aria-label="First name">
                </div>
                <!-- foreign key -->
                <div class="col"> 
                    <label style="color: #fff;">Id_alumni</label>
                    <input type="text" class="form-control"  aria-label="First name">
                  </div>
            </div>
            <div class="row">
                <!-- foreign key -->
                <div class="col"> 
                  <label style="color: #fff;">Id_jenis_berita</label>
                  <label>User</label>
                  <select name="id_user" required class="form-control">
                    
                    <option value="">Berita</option>
                    
                  </select>
                </div>
                <div class="col"> 
                    <label style="color: #fff;">Judul Berita</label>
                    <input type="text" class="form-control"  aria-label="First name">
                  </div>
              </div>
              <div class="row">
                <div class="col"> 
                  <label style="color: #fff;">Tanggal Post</label>
                  <input type="text" class="form-control"  aria-label="First name">
                </div>
                <div class="col"> 
                    <label style="color: #fff;">Kode Berita</label>
                    <input type="text" class="form-control"  aria-label="First name">
                  </div>
              </div>
              <div class="row">
                <div class="col"> 
                  <label style="color: #fff;">Keterangan Berita</label>
                  <input type="text" class="form-control"  aria-label="First name">
                </div>
                <div class="col"> 
                    <button type="submit" class="btn btn-primary" style="font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif; margin-top: 1rem;">Submit</button>
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
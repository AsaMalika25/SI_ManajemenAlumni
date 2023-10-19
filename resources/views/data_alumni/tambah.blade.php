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
                  <label style="color: #fff;">Nama lengkap</label>
                  <input type="text" class="form-control" placeholder="" aria-label="First name">
                </div>
                <div class="col"> 
                    <label style="color: #fff;">Alamat Email</label>
                    <input type="text" class="form-control"  aria-label="First name">
                  </div>
              </div>
              <div class="row">
                <div class="col"> 
                  <label style="color: #fff;">Tanggal Lahir</label>
                  <input type="text" class="form-control"  aria-label="First name">
                </div>
                <div class="col"> 
                    <label style="color: #fff;">Sosial Media</label>
                    <input type="text" class="form-control"  aria-label="First name">
                  </div>
              </div>
              <div class="row">
                <div class="col"> 
                  <label style="color: #fff;">Jurusan</label>
                  <input type="text" class="form-control"  aria-label="First name">
                </div>
                <div class="col"> 
                    <label style="color: #fff;">Nama Perguruan Tinggi</label>
                    <input type="text" class="form-control"  aria-label="First name">
                  </div>
              </div>
              <div class="row">
                <div class="col"> 
                  <label style="color: #fff;">Jurusan yang dipilih pada Perguruan Tinggi</label>
                  <input type="text" class="form-control"  aria-label="First name">
                </div>
                <div class="col"> 
                    <label style="color: #fff;">Nomor Telp</label>
                    <input type="text" class="form-control"  aria-label="First name">
                  </div>
              </div>
              <div class="row">
                <div class="col"> 
                  <label style="color: #fff;">Jenis Kelamin</label>
                  <input type="text" class="form-control"  aria-label="First name">
                </div>
                <div class="col"> 
                    <label style="color: #fff;">Angkatan</label>
                    <input type="text" class="form-control"  aria-label="First name">
                  </div>
              </div>
              <div class="row">
                <div class="col"> 
                  <label style="color: #fff;">Upload Ijazah</label>
                  <input type="text" class="form-control"  aria-label="First name">
                </div>
                <div class="col"> 
                    <label style="color: #fff;">Alamat Perguruan</label>
                    <input type="text" class="form-control"  aria-label="First name">
                  </div>
              </div>
              <div class="row">
                <div class="col"> 
                  <label style="color: #fff;">Alamat Rumah</label>
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
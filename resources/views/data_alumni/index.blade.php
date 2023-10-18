@extends('layout.layouts')
@section('content')
<div class="container mt-5 align-item-center" style="background-repeat: no-repeat; background-size: cover; background-position: center;">
        <h1 class="d-flex justify-content-center" style="color: #fff; font-family: poppins;"><b>LIST DATA ALUMNI</b></h1>
        <br>
        <ul class="nav nav-pills mb-3 d-flex justify-content-center" id="pills-tab" role="tablist">
            <li class="nav-item" role="presentation">
              <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Kuliah</button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="true">Kerja</button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="true" value="wirausaha">Wirausaha</button>
            </li>
          </ul>
          <div class="tab-content" id="pills-tabContent"> 
            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                <div class="card" style="width: 123.02284710017575vh; margin:auto; border-radius: 2.862254025044723vh; margin-bottom: 14.311270125223613vh;">
                    <div class="card-body">  
          
                      <!-- tabel -->
                      <table class="table">
                        <!-- head tabel -->
                        <thead>
                          <tr>
                            <th class="font-table" scope="col">Id</th>
                            <th class="font-table" scope="col">Waktu Kehadiran</th>
                            <th class="font-table" scope="col">Nama</th>
                            <th class="font-table" scope="col">Nomor Handphone</th>
                            <th class="font-table" scope="col">Alamat</th>
                            <th class="font-table" scope="col">Pesan</th>
                            <th class="font-table" scope="col" colspan="2">Aksi</th>
                          </tr>
                        </thead>
                        <!-- end head tabel -->
          
                        <!-- body tabel -->
                        <tbody>
                          <tr></tr>
                          <tr>
                            <th scope="row"></th>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td><a href="">klik untuk lihat pesan</a></td>
                            <!-- <td><a href=""><img src="/img/icons8-edit-30.png" alt="gambar error"></a></td> -->
                            <!-- <td><a href=""><img src="/img/icons8-delete-30.png" alt="gambar error"></a></td> -->
                          </tr>
                        </tbody>
                        <!-- end body tabel -->
                      </table>
                      <!-- end tabel -->
                    </div>
                </div>
            </div>
            <div class="tab-pane fade show" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
            <div class="card" style="width: 123.02284710017575vh; margin:auto; border-radius: 2.862254025044723vh; margin-bottom: 14.311270125223613vh;">
                <div class="card-body">  
      
                  <!-- tabel -->
                  <table class="table">
                    <!-- head tabel -->
                    <thead>
                      <tr>
                        <th class="font-table" scope="col">Id</th>
                        <th class="font-table" scope="col">Waktu Kehadiran</th>
                        <th class="font-table" scope="col">Nama</th>
                        <th class="font-table" scope="col">Nomor Handphone</th>
                        <th class="font-table" scope="col">Alamat</th>
                        <th class="font-table" scope="col">Pesan</th>
                        <th class="font-table" scope="col" colspan="2">Aksi</th>
                      </tr>
                    </thead>
                    <!-- end head tabel -->
      
                    <!-- body tabel -->
                    <tbody>
                      <tr></tr>
                      <tr>
                        <th scope="row"></th>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td><a href="">klik untuk lihat pesan</a></td>
                        <!-- <td><a href=""><img src="/img/icons8-edit-30.png" alt="gambar error"></a></td> -->
                        <!-- <td><a href=""><img src="/img/icons8-delete-30.png" alt="gambar error"></a></td> -->
                      </tr>
                    </tbody>
                    <!-- end body tabel -->
                  </table>
                  <!-- end tabel -->
                </div>
            </div>
            </div>
            <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                <div class="card" style="width: 123.02284710017575vh; margin:auto; border-radius: 2.862254025044723vh; margin-bottom: 14.311270125223613vh;">
                    <div class="card-body">  
          
                      <!-- tabel -->
                      <table class="table">
                        <!-- head tabel -->
                        <thead>
                          <tr>
                            <th class="font-table" scope="col">Id</th>
                            <th class="font-table" scope="col">Waktu Kehadiran</th>
                            <th class="font-table" scope="col">Nama</th>
                            <th class="font-table" scope="col">Nomor Handphone</th>
                            <th class="font-table" scope="col">Alamat</th>
                            <th class="font-table" scope="col">Pesan</th>
                            <th class="font-table" scope="col" colspan="2">Aksi</th>
                          </tr>
                        </thead>
                        <!-- end head tabel -->
          
                        <!-- body tabel -->
                        <tbody>
                          <tr></tr>
                          <tr>
                            <th scope="row"></th>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td><a href="">klik untuk lihat pesan</a></td>
                            <!-- <td><a href=""><img src="/img/icons8-edit-30.png" alt="gambar error"></a></td> -->
                            <!-- <td><a href=""><img src="/img/icons8-delete-30.png" alt="gambar error"></a></td> -->
                          </tr>
                        </tbody>
                        <!-- end body tabel -->
                      </table>
                      <!-- end tabel -->
                    </div>
                </div>
            </div>
          </div>
        <!-- end konten utama -->
      </div> 

@endsection
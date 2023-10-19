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
                          <th class="font-table" scope="col">No</th>
                            <th class="font-table" scope="col">Nama</th>
                            <th class="font-table" scope="col">Angkatan</th>
                            <th class="font-table" scope="col">SosMed</th>
                            <th class="font-table" scope="col">Jurusan</th>
                            <th class="font-table" scope="col" colspan="2">Aksi</th>
                          </tr>
                        </thead>
                        <!-- end head tabel -->
          
                        <!-- body tabel -->
                        <tbody>
                          <tr></tr>
                          @foreach($data_alumni as $r)
                          <th scope="row"></th>
                              <tr>
                                <td>{{$r->id_alumni}}</td>
                                <td>{{$r->nama}}</td>
                                
                              <tr>
                            <td>
                              <a href=""><img src="{{asset('img/gambar-seru.png')}}" alt="" style="width: 30px;"></a>
                              <a href=""><img src="{{asset('img/trash.png')}}" alt="" style="width: 30px;"></a>
                              <a href="{{url('tambah')}}"><img src="{{asset('img/edit.png')}}" alt="" style="width: 30px;"></a>
                            </td>
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
                <div style="margin-left: 5rem;">
                <a class="btn btn-primary" href="#" role="button"> 
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-download" viewBox="0 0 16 16">
                    <path d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z"/>
                    <path d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z"/>
                  </svg>
                CETAK
                </a>
                <a class="btn btn-primary" href="#" role="button">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-lg" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2Z"/>
                  </svg>
                TAMBAH
                </a>
                <a class="btn btn-primary" href="#" role="button">LOG</a>
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
                        <th class="font-table" scope="col">No</th>
                        <th class="font-table" scope="col">Nama</th>
                        <th class="font-table" scope="col">Angkatan</th>
                        <th class="font-table" scope="col">SosMed</th>
                        <th class="font-table" scope="col">jurusan</th>
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
                        <td></td>
                        <td>
                          <a href=""><img src="{{asset('img/gambar-seru.png')}}" alt="" style="width: 30px;"></a>
                          <a href=""><img src="{{asset('img/trash.png')}}" alt="" style="width: 30px;"></a>
                          <a href="{{url('alumni/tambah')}}"><img src="{{asset('img/edit.png')}}" alt="" style="width: 30px;"></a>
                        </td>
                        <!-- <td><a href=""><img src="/img/icons8-edit-30.png" alt="gambar error"></a></td> -->
                        <!-- <td><a href=""><img src="/img/icons8-delete-30.png" alt="gambar error"></a></td> -->
                      </tr>
                    </tbody>
                    <!-- end body tabel -->
                  </table>
                  <!-- end tabel -->
                </div>
            </div>
            <div style="margin-left: 5rem;">
                <a class="btn btn-primary" href="#" role="button"> 
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-download" viewBox="0 0 16 16">
                    <path d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z"/>
                    <path d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z"/>
                  </svg>
                CETAK
                </a>
                <a class="btn btn-primary" href="#" role="button">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-lg" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2Z"/>
                  </svg>
                TAMBAH
                </a>
                <a class="btn btn-primary" href="#" role="button">LOG</a>
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
                        <th class="font-table" scope="col">No</th>
                        <th class="font-table" scope="col">Nama</th>
                        <th class="font-table" scope="col">Angkatan</th>
                        <th class="font-table" scope="col">SosMed</th>
                        <th class="font-table" scope="col">jurusan</th>
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
                        <td></td>
                        <td>
                          <a href=""><img src="{{asset('img/gambar-seru.png')}}" alt="" style="width: 30px;"></a>
                          <a href=""><img src="{{asset('img/trash.png')}}" alt="" style="width: 30px;"></a>
                          <a href="{{url('tambah')}}"><img src="{{asset('img/edit.png')}}" alt="" style="width: 30px;"></a>
                        </td>
                        <!-- <td><a href=""><img src="/img/icons8-edit-30.png" alt="gambar error"></a></td> -->
                        <!-- <td><a href=""><img src="/img/icons8-delete-30.png" alt="gambar error"></a></td> -->
                      </tr>
                    </tbody>
                    <!-- end body tabel -->
                  </table>
                  <!-- end tabel -->
                </div>
            </div>
                <div style="margin-left: 5rem;">
                <a class="btn btn-primary" href="#" role="button"> 
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-download" viewBox="0 0 16 16">
                    <path d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z"/>
                    <path d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z"/>
                  </svg>
                CETAK
                </a>
                <a class="btn btn-primary" href="#" role="button">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-lg" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2Z"/>
                  </svg>
                TAMBAH
                </a>
                <a class="btn btn-primary" href="#" role="button">LOG</a>
              </div>
            </div>
          </div>
        <!-- end konten utama -->
      </div> 
@endsection
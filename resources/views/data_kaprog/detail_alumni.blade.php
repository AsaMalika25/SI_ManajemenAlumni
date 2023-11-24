@extends('layout.layouts')
@section('content')             
    <!-- konten utama -->
    <!-- div one page -->
    <div class="container mt-5 align-item-center" style="background-repeat: no-repeat; background-size: cover; background-position: center;">
      <div class="text-center">
        <h2 class="text-white"><b>Detail Data {{$alumni->nama}}</b></h2>
      </div>
        <div class="card" style="width: 40rem; margin:auto; border-radius: 2.862254025044723vh; margin-bottom: 14.311270125223613vh;">
            <div class="card-body">  
                <main>
                <div class="box-detail">
                <div class="box-txt d-flex">
                    <div class="col-4" style="text-align: center; padding-top: 20px;"> 
                      @if($alumni->ijazah)
                          <img src="{{ url('foto') . '/' . $alumni->ijazah }} "
                              style="max-width: 80%; height:280px; border-radius: 5%;" />
                      @endif

                        <button type="button" class="btn btn-warning" style="margin-top: 20px;"><a href="{{url('data-alumni-kaprog')}}" class="align-item-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-return-left" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M14.5 1.5a.5.5 0 0 1 .5.5v4.8a2.5 2.5 0 0 1-2.5 2.5H2.707l3.347 3.346a.5.5 0 0 1-.708.708l-4.2-4.2a.5.5 0 0 1 0-.708l4-4a.5.5 0 1 1 .708.708L2.707 8.3H12.5A1.5 1.5 0 0 0 14 6.8V2a.5.5 0 0 1 .5-.5z"/>
                            </svg>
                        </a></button>   
                    </div>
                
                    <div class="col-7" style="width: 25%; margin-left: 50px; margin-top: 3%;" >
                        <h6 class="text-info" style="color: #4378ff;"><b>Nama</b></h6>
                            <p class="text-detail text-dark">{{$alumni->nama}}</p>
                        <h6 class="text-info" style="color: #4378ff;"><b>Jenis kelamin</b></h6>
                            <p class="text-detail text-dark">{{$alumni->jenkel}}</p>
                        <h6 class="text-info " style="color: #4378ff;"><b>No telp</b></h6>
                            <p class="text-detail text-dark">{{$alumni->no_telp}}</p>
                        <h6 class="text-info" style="color: #4378ff;"><b>Sosial Media</b></h6>
                            <p class="text-detail text-dark">{{$alumni->sosmed}}</p>
                        <h6 class="text-info" style="color: #4378ff;"><b>Angkatan</b></h6>
                            <p class="text-detail text-dark">{{$alumni->no_angkatan}}</p>
                    </div>
                    <div class="" style="width: 30%; margin-top: 3%;">
                        <h6 class="text-info" style="color: #4378ff;"><b>Kelas</b></h6>		
                            <p class="text-detail text-dark">{{$alumni->nama_kelas}}</p>
                        <h6 class="text-info" style="color: #4378ff;"><b>Alamat</b></h6>
                            <p class="text-detail text-dark">{{$alumni->alamat}}</p>
                        <h6 class="text-info" style="color: #4378ff;"><b>Email</b></h6>
                            <p class="text-detail text-dark">{{$alumni->email}}</p>
                        <h6 class="text-info" style="color: #4378ff;"><b>Tanggal lahir</b></h6>
                            <p class="text-detail text-dark">{{$alumni->tgl_lahir}}</p>
                    </div>
                </div>
                </div>
                </main>
                   
            </div>
        </div>
    </div>
           
        <!-- end konten utama -->
      </div> 
      <!-- end one page -->
@endsection
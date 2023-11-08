@extends('layout.layouts')
@section('content')             
    <!-- konten utama -->
    <!-- div one page -->
    <div class="container mt-5 align-item-center" style="background-repeat: no-repeat; background-size: cover; background-position: center;">
      <div class="text-center">
        <h2 class="text-white">DETAIL DATA {{$alumni->nama}} </h2>
      </div>
        <div class="card" style="width: 40rem; margin:auto; border-radius: 2.862254025044723vh; margin-bottom: 14.311270125223613vh;">
            <div class="card-body">  
                <main>
                <div class="box-detail">
                <div class="box-txt d-flex">
                    <div class="col-2" >
                      @if($alumni->ijazah)
                          <img src="{{ url('foto') . '/' . $alumni->ijazah }} "
                              style="max-width: 100%; height:50%;" />
                      @endif

                            <button type="button" class="btn btn-warning" style="margin-top: 20px; margin-left: 25px;"><a href="{{url('alumni')}}" class="align-item-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-return-left" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M14.5 1.5a.5.5 0 0 1 .5.5v4.8a2.5 2.5 0 0 1-2.5 2.5H2.707l3.347 3.346a.5.5 0 0 1-.708.708l-4.2-4.2a.5.5 0 0 1 0-.708l4-4a.5.5 0 1 1 .708.708L2.707 8.3H12.5A1.5 1.5 0 0 0 14 6.8V2a.5.5 0 0 1 .5-.5z"/>
                                    </svg>
                            </a></button>
                            
                        
                    </div>
                
                    <div class="col-7" style="flex: 0 0 auto; width: 30%; margin-left: 50px;" >
                        <h6 class="text-info text-dark">Nama</h6>
                            <p class="text-detail">{{$alumni->nama}}</p><br>
                        <h6 class="text-info text-dark">Jenis kelamin</h6>
                            <p class="text-detail text-dark">{{$alumni->jenkel}}</p><br>
                        <h6 class="text-info text-dark">No telp</h6>
                            <p class="text-detail text-dark">{{$alumni->no_telp}}</p><br>
                        <h6 class="text-info text-dark">Sosial Media</h6>
                            <p class="text-detail text-dark">{{$alumni->sosmed}}</p><br>
                        <h6 class="text-info text-dark">Angkatan</h6>
                            <p class="text-detail text-dark">{{$alumni->no_angkatan}}</p><br>
                    </div>
                    <div class="" style="flex: 0 0 auto; width: 30%;">
                        <h6 class="text-info text-dark">kelas</h6>		
                            <p class="text-detail text-dark">{{$alumni->nama_kelas}}</p><br>
                        <h6 class="text-info text-dark">Alamat</h6>
                            <p class="text-detail"></p>{{$alumni->alamat}}<br>
                        <h6 class="text-info text-dark">Email</h6>
                            <p class="text-detail">{{$alumni->email}}</p><br>
                        <h6 class="text-info text-dark">Tanggal lahir</h6>
                            <p class="text-detail">{{$alumni->tgl_lahir}}</p><br>
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
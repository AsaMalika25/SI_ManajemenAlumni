@extends('layout.layouts')
@section('content')
<div class="container mt-5 align-item-center" style="background-repeat: no-repeat; background-size: cover; background-position: center;">
    <form action="" method="post"></form>
        <div class="card" style="width: 30rem; margin:auto; border-radius: 2.862254025044723vh; margin-bottom: 14.311270125223613vh;">
            <div class="card-body">  
                <main>
                <div style="margin: 5% 3%;" class="justify-content-center d-flex">
                    <h2 class="txt-detail"><b>Hello, {{auth()->user()->username}}!</b></h2>
                </div>
                    <div class="justify-content-center d-flex">
                        <img src="img/pict-gedung.jpg" class="" style="width: 8rem; height: 8rem; border-radius: 60%;"><br>
                    </div>
                    @foreach($alumni as $a)  
                    <div style="text-align: center; padding: 0%; margin: 3%;">
                        <p style="margin-bottom: 0px;">{{$a->nama}}</p>
                        <p style="margin-top: 0px; margin-bottom: 0px;">{{$a->email}}</p>
                    </div>
                    
                    <div class="justify-content-center d-flex mt-5">
                        <div class="col-7" style="width: 40%; margin-left: 10%;">
                            <h6 class="text-info">
                              <svg xmlns="http://www.w3.org/2000/svg" style="color:#688EF2" width="16" height="16" fill="currentColor" class="bi bi-grid-1x2-fill" viewBox="0 0 16 16">
                                <path d="M0 1a1 1 0 0 1 1-1h5a1 1 0 0 1 1 1v14a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1V1zm9 0a1 1 0 0 1 1-1h5a1 1 0 0 1 1 1v5a1 1 0 0 1-1 1h-5a1 1 0 0 1-1-1V1zm0 9a1 1 0 0 1 1-1h5a1 1 0 0 1 1 1v5a1 1 0 0 1-1 1h-5a1 1 0 0 1-1-1v-5z"/>
                              </svg>
                              Kelas
                            </h6>
                            <h6 class="text-info">Tempat, tanggal lahir</h6>
                            <h6 class="text-info">Sosmed</h6>
                            <h6 class="text-info">Angkatan</h6>

                        </div>
                        <div class="" style="width: 4%;">
                            <h6 class="text-detail">:</h6>
                            <h6 class="text-detail">:</h6>		
                            <h6 class="text-detail">:</h6>
                            <h6 class="text-detail">:</h6>		
                        </div>
                        <div class="" style="width: 50%;">
                            <h6 class="text-detail">{{$a->nama_kelas}}</h6>
                            <h6 class="text-detail">{{$a->tgl_lahir}}</h6>
                            <h6 class="text-detail">{{$a->sosmed}}</h6>
                            <h6 class="text-detail">{{$a->no_angkatan}}</h6>
                        </div>
                    </div>
                   
                    @endforeach
                    <button type="button" class="btn btn-warning rounded-circle" style="margin-top: 20px; float: right;"><a href="list.html" class="align-item-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                            <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                            <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                          </svg>
                    </button>  
                </main>
                   
            </div>
        </div>
    </div>
@endsection


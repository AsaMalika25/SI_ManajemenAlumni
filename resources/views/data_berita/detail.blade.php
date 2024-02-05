@extends('layout.layouts')
@section('content')
<div class="container mt-5 align-item-center" style="background-repeat: no-repeat; background-size: cover; background-position: center;">
    <div class="text-center">
        <h2 class="text-white"><b>Detail Data {{$tberita->judul_berita}}</b></h2>
    </div>
    <div class="card" style="width: 40rem; margin:auto; border-radius: 2.862254025044723vh; margin-bottom: 14.311270125223613vh;">
        <div class="card-body">
            <main>
                <div class="box-detail">
                    <div class="box-txt d-flex">
                        <div class="col-4" style="text-align: center; padding-top: 20px;">
                            @if($tberita->file)
                            <img src="{{ url('foto') . '/' . $tberita->file }} " style="max-width: 80%; height:280px; border-radius: 5%;" />
                            @endif

                            <button type="button" class="btn btn-warning" style="margin-top: 20px;"><a href="{{url('berita')}}" class="align-item-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-return-left" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M14.5 1.5a.5.5 0 0 1 .5.5v4.8a2.5 2.5 0 0 1-2.5 2.5H2.707l3.347 3.346a.5.5 0 0 1-.708.708l-4.2-4.2a.5.5 0 0 1 0-.708l4-4a.5.5 0 1 1 .708.708L2.707 8.3H12.5A1.5 1.5 0 0 0 14 6.8V2a.5.5 0 0 1 .5-.5z" />
                                    </svg>
                                </a>
                            </button>
                        </div>

                        <div class="col-7" style="width: 25%; margin-left: 50px; margin-top: 3%;">
                            <h6 class="text-info" style="color: #4378ff;"><b>Id Berita</b></h6>
                            <p class="text-detail text-dark">{{$tberita->id_berita}}</p>
                            <h6 class="text-info" style="color: #4378ff;"><b>Judul Berita</b></h6>
                            <p class="text-detail text-dark">{{$tberita->judul_berita}}</p>
                            <h6 class="text-info " style="color: #4378ff;"><b>Jenis Berita</b></h6>
                            <p class="text-detail text-dark">{{$tberita->jenis_berita}}</p>
                            <h6 class="text-info" style="color: #4378ff;"><b>Tanggal Post</b></h6>
                            <p class="text-detail text-dark">{{$tberita->tgl_post}}</p>
                            <h6 class="text-info" style="color: #4378ff;"><b>Kode Berita</b></h6>
                            <p class="text-detail text-dark">{{$tberita->kode_berita}}</p>
                        </div>
                        <div class="" style="width: 30%; margin-top: 3%;">
                            <h6 class="text-info" style="color: #4378ff;"><b>Keterangan Berita</b></h6>
                            <!-- <div class="trix-content"> -->
                                <pre>     {{$tberita->ket_berita}}</pre>
                            <!-- </div> -->
                            <p></p>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
</div>
@endsection
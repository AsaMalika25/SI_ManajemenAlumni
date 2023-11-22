@extends('layout.layouts')
@section('content')             
    <!-- konten utama -->
    <!-- div one page -->
    <div class="container mt-5 align-item-center" style="background-repeat: no-repeat; background-size: cover; background-position: center;">
      <div class="text-center">
        <h2 class="text-white"><b>Detail Data Usaha</b></h2>
      </div>
        <div class="card" style="width: 40rem; margin:auto; border-radius: 2.862254025044723vh; margin-bottom: 14.311270125223613vh;">
            <div class="card-body">  
                <main>
                <div class="box-detail">
                <div class="box-txt d-flex">
                    <div class="col-4" style="text-align: center; padding-top: 20px;"> 
                      @if($tusaha->gambar_usaha)
                          <img src="{{ url('foto') . '/' . $tusaha->gambar_usaha }} "
                              style="height:auto; max-width: 170px; border-radius: 5%;" />
                      @endif

                        <button type="button" class="btn btn-warning" style="margin-top: 20px;"><a href="{{url('wirausaha')}}" class="align-item-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-return-left" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M14.5 1.5a.5.5 0 0 1 .5.5v4.8a2.5 2.5 0 0 1-2.5 2.5H2.707l3.347 3.346a.5.5 0 0 1-.708.708l-4.2-4.2a.5.5 0 0 1 0-.708l4-4a.5.5 0 1 1 .708.708L2.707 8.3H12.5A1.5 1.5 0 0 0 14 6.8V2a.5.5 0 0 1 .5-.5z"/>
                            </svg>
                        </a></button>   
                    </div>
                
                    <div class="col-7" style="width: 25%; margin-left: 50px; margin-top: 3%;" >
                        <h6 class="text-info" style="color: #4378ff;"><b>ID Usaha</b></h6>
                            <p class="text-detail text-dark">{{$tusaha->id_wirausaha}}</p>
                        <h6 class="text-info" style="color: #4378ff;"><b>NAMA USAHA</b></h6>
                            <p class="text-detail text-dark">{{$tusaha->nama_usaha}}</p>
                        <h6 class="text-info " style="color: #4378ff;"><b>BIDANG USAHA</b></h6>
                            <p class="text-detail text-dark">{{$tusaha->bidang}}</p>
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
@extends('layout.layouts')
@section('content')
<div class="container mt-5 align-item-center" style="background-repeat: no-repeat; background-size: cover; background-position: center;">
        <h1 class="d-flex justify-content-center" style="color: #fff; font-family: poppins;"><b>LOG ACTIVITY BERITA</b></h1>
        <br>
       
          <div class="tab-content" id="pills-tabContent">   
           
                <div class="card" style="width: 123.02284710017575vh; margin:auto; border-radius: 2.862254025044723vh; margin-bottom: 14.311270125223613vh;">
                    <div class="card-body">  
          
                      <!-- tabel -->
                      <table class="table">
                        <!-- head tabel -->
                        <thead>
                          <tr>
                          <th class="font-table" scope="col">Log</th>
                            <!-- <th class="font-table" scope="col" colspan="2">Aksi</th> -->
                          </tr>
                        </thead>
                        <!-- end head tabel -->
          
                        <!-- body tabel -->
                        <tbody>
                          <tr></tr>
                          @foreach($log_berita as $r)
                          <tr>
                            <th scope="row">{{$r->log}}</th>
                            <!-- <td>
                              <a href=""><img src="{{asset('img/gambar-seru.png')}}" alt="" style="width: 30px;"></a>
                              <form action="{{url('jenis_berita/hapus/'. $r->id_jenis_berita)}}" method="post">
                              @csrf
                                <button type="submit"><img src="{{asset('img/trash.png')}}" alt="" style="width: 30px;"></button>
                              </form>
                              
                              <a href="jenis_berita/edit/{{$r->id_jenis_berita}}"><img src="{{asset('img/edit.png')}}" alt="" style="width: 30px;"></a>
                            </td> -->
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
                <a class="btn btn-primary" href="berita" role="button">kembali</a>
              </div>
              </div>
            </div>
          </div>
        <!-- end konten utama -->
      </div> 
@endsection    
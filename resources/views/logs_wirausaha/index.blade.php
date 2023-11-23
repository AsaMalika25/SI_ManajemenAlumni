@extends('layout.layouts')
@section('content')
<div class="container mt-5 align-item-center" style="background-repeat: no-repeat; background-size: cover; background-position: center;">
        <h1 class="d-flex justify-content-center" style="color: #fff; font-family: poppins;"><b>LIST WIRAUSAHA</b></h1>
        <br>
       
          <div class="tab-content" id="pills-tabContent">   
           
                <div class="card" style="width: 123.02284710017575vh; margin:auto; border-radius: 2.862254025044723vh; margin-bottom: 14.311270125223613vh;">
                    <div class="card-body">  
          
                      <!-- tabel -->
                      <table class="table">
                        <!-- head tabel -->
                        <thead>
                          <tr>
                          <th class="font-table" scope="col">Log Activity</th>
                            <!-- <th class="font-table" scope="col" colspan="2">Aksi</th> -->
                          </tr>
                        </thead>
                        <!-- end head tabel -->
          
                        <!-- body tabel -->
                        <tbody>
                          <tr></tr>
                          @foreach($logs_wirausaha as $r)
                          <tr>
                            <th scope="row">{{$r->log}}</th>
                          
                          </tr>
                          @endforeach
                        </tbody>
                        <!-- end body tabel -->
                      </table>
                      <!-- end tabel -->
                    </div>
                </div>
                <div style="margin-left: 5rem;">  
                <a class="btn btn-primary" href="wirausaha" role="button">kembali</a>
              </div>
              </div>
            </div>
          </div>
        <!-- end konten utama -->
      </div> 
@endsection
@extends('layout.layouts')
@section('content')  
    <!-- konten utama -->
    <!-- div one page -->

          <!-- form tambah -->
    <div class="card" style="width: 85.86762075134168vh; margin:auto; border-radius: 2.862254025044723vh; margin-top: 2rem; margin-bottom: 14.311270125223613vh;">
    <div class="card-body">
          <!-- text judul   -->
          
          <div class="text-center">
            <h1 class="h4 text-gray-900 font-nav">Form Tambah Kaprog</h1>
            <br>
          </div>
            <!-- text judul   -->
            <!-- form tambah -->
        <form action="simpan" method="POST">
            
                <!-- foreign key -->
                  <label style="color: black;">Id Akun</label>
                  <input type="hidden" class="form-control"  name="id_kaprog" aria-label="First name" value="{{$tkaprog->id_kaprog}}"><br>
                  <select name="id_akun" required class="form-control">
                        @foreach($takun as $u)
                          <option value="{{$u->id_akun}}">{{$u->username}}</option>
                        @endforeach
                  </select><br>
                
                
                  <label style="color: black;">Jurusan</label>
                  <select name="id_jurusan" required class="form-control">
                        @foreach($tjurusan as $u)
                          <option value="{{$u->id_jurusan}}">{{$u->nama_jurusan}}</option>
                        @endforeach
                  </select><br>
                
                
                
                  <label style="color: black;">Nama Kaprog</label>
                  <input type="text" class="form-control"  name="nama_kaprog" aria-label="First name" value="{{$tkaprog->nama_kaprog}}"><br>
                
                
                  <label style="color: black;">Email</label>
                  <input type="teext" class="form-control" name="email" aria-label="First name" value="{{$tkaprog->email}}"><br>
                  <button type="submit" class="btn btn-primary" style="font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif; margin-top: 1rem;">Submit</button>
                  </div>
              </div>
             @csrf
        </form>  
    </div>
          <!-- end form tambah -->
        </div>
      </div>
        <!-- end konten utama -->
      <!-- end one page -->  
@endsection
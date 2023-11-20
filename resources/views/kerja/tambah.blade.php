@extends('layout.layouts')
@section('content')  
    <!-- konten utama -->
    <!-- div one page -->

          <!-- form tambah -->
          <div class="container" style="margin-top: 3rem;">
            <!-- text judul   -->
            <!-- form tambah -->
          <div class="text-center">
            <h1 class="h4 text-gray-900 font-nav" style="color: white"><b>Form Tambah</b></h1>
            <br>
          </div>
          @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
          <!-- end text judul -->
          <form action="simpan" method="post" enctype="multipart/form-data">
              <div class="mb-3" >
                <label for="id_alumni" class="form-label font-form">id_alumni</label>
                <select name="id_alumni" id="id_alumni" class="form-control">
                    @foreach($alumni as $a)
                    <option value="{{$a->id_alumni}}">{{$a->nama}}</option>
                    @endforeach
                </select>
              </div>
            <div class="mb-3" >
              <label for="instansi" class="form-label font-form">Instansi</label>
              <input type="text" class="form-control" id="instansi" placeholder="Instansi" name="instansi" style="border-radius:  1.8635607321131447vh;" required>
            </div>
            <div class="mb-3" >
              <label for="jabatan" class="form-label font-form">Jabatan</label>
              <input type="text" class="form-control" id="jabatan" placeholder="Jabatan" name="jabatan" style="border-radius:  1.8635607321131447vh;" required>
            </div>
           
                 @csrf
                <div class="col"> 
                    <button type="submit" class="btn btn-primary" style="font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif; margin-top: 1rem;">Simpan</button>
                  </div>
              </div>
        </form>  
    </div>
          <!-- end form tambah -->
        </div>
      </div>
        <!-- end konten utama -->
      </div> 
      <!-- end one page -->  
@endsection
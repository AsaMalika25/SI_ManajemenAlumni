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
          <form action="tambah_wirausaha/simpan" method="post" enctype="multipart/form-data">
            <div class="mb-3" >
              <label for="nama_usaha" class="form-label font-form">Nama Usaha</label>
              <input type="text" class="form-control" id="namaUsaha" placeholder="Nama usaha" name="nama_usaha" style="border-radius:  1.8635607321131447vh;" required>
            </div>
            <div class="mb-3" >
              <label for="bidang" class="form-label font-form">Bidang Usaha</label>
              <input type="text" class="form-control" id="bidangUsaha" placeholder="Bidang usaha" name="bidang" style="border-radius:  1.8635607321131447vh;" required>
            </div>
            <div class="form-group mt-2">
                <label>File</label>
                <input type="file" class="form-control" name="gambar_usaha">
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
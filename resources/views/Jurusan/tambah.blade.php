@extends('layout.layouts')
@section('content')                    
    <!-- konten utama -->
    <!-- div one page -->
    <div class="card" style="width: 85.86762075134168vh; margin:auto; border-radius: 2.862254025044723vh; margin-top: 2rem; margin-bottom: 14.311270125223613vh;">
        <div class="card-body">
          <!-- text judul   -->
          
          <div class="text-center">
            <h1 class="h4 text-gray-900 mb-4 font-nav">Form Tambah Jurusan</h1>
            <br>
          </div>
          <!-- end text judul -->
    
          <!-- form tambah -->
          <form action="simpan" method="post">
            @csrf
            <div class="mb-3" >
              <label for="inputNama" class="form-label font-form">Nama jurusan</label>
              <input type="text" class="form-control" id="inputNama" name="nama_jurusan" style="border-radius:  1.8635607321131447vh;" required>
            </div>

            <button type="submit" class="btn btn-primary" style="font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;">Submit</button>
          </form>
          <!-- end form tambah -->
        </div>
      </div>
        <!-- end konten utama -->
      </div> 
      <!-- end one page -->  
</body>
</html>
@endsection
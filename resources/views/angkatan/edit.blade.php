@extends('layout.layouts')
@section('content')           
    <!-- konten utama -->
    <!-- div one page -->
    <div class="card" style="width: 85.86762075134168vh; margin:auto; border-radius: 2.862254025044723vh; margin-top: 2rem; margin-bottom: 14.311270125223613vh;">
        <div class="card-body">
          <!-- text judul   -->
          <div class="text-center">
            <h1 class="h4 text-gray-900 mb-4 font-nav">Form Edit Angkatan</h1>
            <br>
          </div>
          <!-- end text judul -->
    
          <!-- form tambah -->
          <form action="{{url('angkatan/edit/simpan')}}" method="post">
            @csrf
            <div class="mb-3" >
              <label for="inputNama" class="form-label font-form">No angkatan</label>
              <input type="hidden" class="form-control" id="inputNama" name="id_angkatan" style="border-radius:  1.8635607321131447vh;" value="{{$edit_angkatan->id_angkatan}}">
              <input type="text" class="form-control" id="inputNama" name="no_angkatan" style="border-radius:  1.8635607321131447vh;" required value="{{$edit_angkatan->no_angkatan}}">
            </div>
            <div class="mb-3" >
              <label for="inputNama" class="form-label font-form">tahun masuk</label>
              <input type="date" class="form-control" id="inputNama" name="tahun_masuk" style="border-radius:  1.8635607321131447vh;" required value="{{$edit_angkatan->tahun_masuk}}">
            </div>
            <div class="mb-3">
              <label for="inputJurusan" class="form-label font-form">tahun_keluar</label>
              <input type="date" class="form-control" id="inputJurusan" name="tahun_keluar" style="border-radius:  1.8635607321131447vh;" required value="{{$edit_angkatan->tahun_keluar}}">
            </div>
  
            <button type="submit" class="btn btn-primary" style="font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;">Submit</button>
          </form>
          <!-- end form tambah -->
        </div>
      </div>
        <!-- end konten utama -->
      </div> 
      <!-- end one page -->  
@endsection
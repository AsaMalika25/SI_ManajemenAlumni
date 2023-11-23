@extends('layout.layouts')
@section('content')
    <div class="card" style="width: 85.86762075134168vh; margin:auto; border-radius: 2.862254025044723vh; margin-top: 8%;">
        <div class="card-body">
          <!-- text judul  -->
          <div class="text-center">
            <h1 class="h4 text-gray-900 mb-4 font-nav"><b>Form Tambah Angkatan</b></h1>
          </div>
          <!-- end text judul -->
    
          <!-- form tambah -->
          <form action="{{url('angkatan/simpan')}}" method="post">
            @csrf
            <div class="mb-3" >
              <label for="inputNama" class="form-label font-form">No Angkatan</label>
              <input type="text" class="form-control" id="inputNama" name="no_angkatan" style="border-radius:  1.8635607321131447vh;" required>
            </div>
            <div class="mb-3" >
              <label for="inputNama" class="form-label font-form">Tahun Masuk</label>
              <input type="date" class="form-control" id="inputNama" name="tahun_masuk" style="border-radius:  1.8635607321131447vh;" required>
            </div>
            <div class="mb-3">
              <label for="inputJurusan" class="form-label font-form">Tahun Keluar</label>
              <input type="date" class="form-control" id="inputJurusan" name="tahun_keluar" style="border-radius:  1.8635607321131447vh;" required>
            </div>
           
            <a href="/angkatan" class="btn btn-warning" style="font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;">Kembali</a>
            <button type="submit" class="btn btn-primary" style="font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;">Submit</button>
          </form>
          <!-- end form tambah -->
        </div>
    </div>
@endsection
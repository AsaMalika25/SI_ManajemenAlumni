@extends('layout.layouts')
@section('content')  
<div class="card" style="width: 85.86762075134168vh; margin:auto; border-radius: 2.862254025044723vh; margin-top: 2rem; margin-top: 15%;">
  <div class="card-body">
    <div class="text-center">
      <h1 class="h4 text-gray-900 mb-4 font-nav"><b>Form Tambah Jenis Berita</b></h1>
      <br>
    </div>
    <form action="simpan" method="post">
      @csrf
      <div class="mb-3">
        <label for="inputNama" class="form-label font-form">Jenis Berita</label>
        <input type="text" class="form-control" id="inputNama" name="jenis_berita" style="border-radius:  1.8635607321131447vh;" required>
      </div>

      <a href="/jenis_berita" class="btn btn-warning" style="font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;">Kembali</a>
      <button type="submit" class="btn btn-primary" style="font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;">Submit</button>
    </form>
    <!-- end form tambah -->
  </div>
</div>
@endsection
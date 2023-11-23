@extends('layout.layouts')
@section('content')
<div class="card" style="width: 85.86762075134168vh; margin:auto; border-radius: 2.862254025044723vh; margin-top: 4rem; margin-bottom: 13.311270125223613vh;">
  <div class="card-body">
    <!-- text judul   -->
    <div class="text-center">
      <h1 class="h4 text-gray-900 mb-4 font-nav">Edit Wirausaha</h1>
      <br>
    </div>
    <!-- end text judul -->

    <!-- form tambah -->
    <form action="simpan" method="post" enctype="multipart/form-data">
      <div class="mb-3">
        <input type="hidden" class="form-control" name="id_wirausaha" value="{{$twirausaha->id_wirausaha}}" />
        <label for="nama_usaha" class="form-label font-form">Nama Usaha</label>
        <input type="text" class="form-control" id="namaUsaha" placeholder="Nama usaha" name="nama_usaha" style="border-radius:  1.8635607321131447vh;" value="{{$twirausaha->nama_usaha}}" required>
      </div>
      <div class="mb-3">
        <label for="bidang" class="form-label font-form">Bidang Usaha</label>
        <input type="text" class="form-control" id="bidangUsaha" placeholder="Bidang usaha" name="bidang" style="border-radius:  1.8635607321131447vh;" value="{{$twirausaha->bidang}}" required>
      </div>
      <div class="form-group mt-2">
        <label>Logo</label>
        <input type="file" class="form-control" name="gambar_usaha" value="{{$twirausaha->gambar_usaha}}">
        <br>
        @csrf
      </div>
      <a href="/wirausaha" class="btn btn-warning" style="font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;">Kembali</a>
      <button type="submit" class="btn btn-primary" style="font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;">Submit</button>
    </form>
    <!-- end form tambah -->
  </div>
</div>
@endsection
@extends('layout.layouts')
@section('content') 
<div class="card" style="width: 85.86762075134168vh; margin:auto; border-radius: 2.862254025044723vh; margin-top: 4rem; margin-bottom: 13.311270125223613vh;">
  <div class="card-body">
    <div class="text-center">
      <h1 class="h4 text-gray-900 font-nav"><b>Form Tambah</b></h1>
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
      <div class="mb-3">
        <label for="nama_usaha" class="font-form">Nama Usaha</label>
        <input type="text" class="form-control" id="namaUsaha" placeholder="Nama usaha" name="nama_usaha" required>
      </div>
      <div class="mb-3">
        <label for="bidang" class="font-form">Bidang Usaha</label>
        <input type="text" class="form-control" id="bidangUsaha" placeholder="Bidang usaha" name="bidang" required>
      </div>
      <div class="mb-3">
        <label for="alumni" class="font-form">Alumni</label>
        <select class="form-control" name='id_alumni'>
          <option selected hidden> Pilih Alumni</option>
          @foreach($alumni as $t)
          <option value="{{$t->id_alumni}}">{{$t->nama}}</option>
          @endforeach
        </select>
      </div>
      <div class="form-group mt-2">
        <label>Logo</label>
        <input type="file" class="form-control" name="gambar_usaha">
      </div>
      @csrf
      <div class="col">
        <a href="/wirausaha" class="btn btn-warning" style="font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif; margin-top: 1rem;">Kembali</a>
        <button type="submit" class="btn btn-primary" style="font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif; margin-top: 1rem;">Simpan</button>
      </div>
    </form>
  </div>
  @endsection
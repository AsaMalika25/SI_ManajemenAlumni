@extends('layout.layouts')
@section('content')
<div class="container" style="margin-top: 3rem;">
    <div class="text-center">
      <h1 class="h4 text-gray-900 font-nav" style="color: white"><b>Form Tambah</b></h1>
      <br>
    </div>
    <form action="simpan" method="post" enctype="multipart/form-data">
    <div class="row">
      <div class="col">
        <label style="color: #fff;">Jenis_berita</label>
        <select name="id_jenis_berita" required class="form-control">
          @foreach($tjenis_berita as $u)
          <option value="{{$u->id_jenis_berita}}">{{$u->jenis_berita}}</option>
          @endforeach
        </select>
      </div>
      <div class="col">
        <label style="color: #fff;">Judul Berita</label>
        <input type="text" class="form-control" name="judul_berita" aria-label="First name">
      </div>
    </div>
    <div class="row">
      <div class="col">
        <label style="color: #fff;">Tanggal Post</label>
        <input type="date" class="form-control" name="tgl_post" aria-label="First name">
      </div>
      <div class="col">
        <label style="color: #fff;">Kode Berita</label>
        <input type="text" class="form-control" name="kode_berita" aria-label="First name">
      </div>
    </div>
    <div class="row">
      <div class="col">
        <label style="color: #fff;">Keterangan Berita</label>
        <input type="text" class="form-control" name="ket_berita" aria-label="First name">
      </div>
      <div class="col">
        <label style="color: #fff;">Gambar Berita</label>
        <input type="file" class="form-control" name="file" aria-label="First name">
      </div>
    </div>
    <div class="col">
        <a href="/berita" class="btn btn-warning" style="font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif; margin-top: 1rem;">Kembali</a>
        <button type="submit" class="btn btn-primary" style="font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif; margin-top: 1rem;">Submit</button>
      </div>
    @csrf
  </form>
</div>
@endsection
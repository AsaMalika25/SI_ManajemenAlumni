@extends('layout.layouts')
@section('content')
<!-- konten utama -->
<!-- div one page -->

<!-- form tambah -->
<div class="container" style="margin-top: 3rem;">
  <form action="simpan" method="post" enctype="multipart/form-data">
    <div class="text-center">
      <h1 class="h4 text-gray-900 font-nav" style="color: white"><b>Form Edit</b></h1>
      <br>
    </div>
    <div class="row">
      <!-- foreign key -->
      <div class="col">
        <input type="hidden" class="form-control" name="id_berita" value="{{$tberita->id_berita}}" />
        <label style="color: #fff;">Jenis_berita</label>
        <select name="id_jenis_berita" required class="form-control">
          @foreach($tjenis_berita as $u)
          <option value="{{$u->id_jenis_berita}}">{{$u->jenis_berita}}</option>
          @endforeach
        </select>
      </div>
      <div class="col">
        <label style="color: #fff;">Judul Berita</label>
        <input type="text" class="form-control" name="judul_berita" aria-label="First name" value="{{$tberita->judul_berita}}">
      </div>
    </div>
    <div class="row">
      <div class="col">
        <label style="color: #fff;">Tanggal Post</label>
        <input type="date" class="form-control" name="tgl_post" aria-label="First name" value="{{$tberita->tgl_post}}">
      </div>
      <div class="col">
        <label style="color: #fff;">Kode Berita</label>
        <input type="text" class="form-control" name="kode_berita" aria-label="First name" value="{{$tberita->kode_berita}}">
      </div>
    </div>
    <div class="row">
      <div class="col">
        <label style="color: #fff;">Keterangan Berita</label>
        <input type="text" class="form-control" name="ket_berita" aria-label="First name" value="{{$tberita->ket_berita}}">
      </div>
      <div class="col">
        <!-- <label style="color: #fff;">Gambar Berita</label> -->
        <!-- <input type="file" class="form-control" name="file"  aria-label="First name"> -->
        <label>Gambar Berita</label>
        <input type="file" class="form-control" name="file" value="{{$tberita->file}}">
        <img src="/foto/{{$tberita->file}}" width="200px">
      </div>
    </div>
    <div class="col">
      <a href="/berita" class="btn btn-warning" style="font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif; margin-top: 1rem;">Kembali</a>
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
</div>
<!-- end one page -->
@endsection
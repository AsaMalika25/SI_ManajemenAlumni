@extends('layout.layouts')
@section('content')
<div class="card" style="width: 85.86762075134168vh; margin:auto; border-radius: 2.862254025044723vh; margin-top: 7rem; margin-bottom: 3vh;">
  <div class="card-body">
    <!-- text judul   -->
    <div class="text-center">
      <h1 class="h4 text-gray-900 font-nav"><b>Edit Kuliah</b></h1>
      <br>
    </div>
    <!-- end text judul -->

    <!-- form edit -->
    <form action="simpan" method="post" enctype="multipart/form-data">
      <div class="mb-3">
        <label for="id_alumni" class="form-label font-form">Nama Alumni</label>
        <select name="id_alumni" id="id_alumni" class="form-control">
          @foreach($alumni as $a)
          <option value="{{$a->id_alumni}}">{{$a->nama}}</option>
          @endforeach
        </select>
      </div>
      <div class="mb-3">
        <input type="hidden" class="form-control" name="id_kuliah" value="{{$tkuliah->id_kuliah}}" />
        <label for="nama_lembaga" class="form-label font-form">Nama Lembaga</label>
        <input type="text" class="form-control" id="namaLembaga" placeholder="Nama Lembaga" name="nama_lembaga" style="border-radius:  1.8635607321131447vh;" required value="{{$tkuliah->nama_lembaga}}" />
      </div>
      <div class="mb-3">
        <label for="jurusan_kuliah" class="form-label font-form">Jurusan Kuliah</label>
        <input type="text" class="form-control" id="jurusan_kuliah" placeholder="Jurusan Kuliah" name="jurusan_kuliah" style="border-radius:  1.8635607321131447vh;" required value="{{$tkuliah->jurusan_kuliah}}">
        @csrf
      </div>
      <a href="/kuliah" class="btn btn-warning" style="font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;">Kembali</a>
      <button type="submit" class="btn btn-primary" style="font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;">Submit</button>
    </form>
    <!-- end form edit -->
  </div>
</div>
@endsection
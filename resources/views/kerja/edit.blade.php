@extends('layout.layouts')
@section('content')
<div class="card" style="width: 85.86762075134168vh; margin:auto; border-radius: 2.862254025044723vh; margin-top: 6rem; margin-bottom: 3vh;">
  <div class="card-body">
    <!-- text judul   -->
    <div class="text-center">
      <h1 class="h4 text-gray-900 font-nav"><b>Edit Form Kerja</b></h1>
      <br>
    </div>
    <!-- end text judul -->

    <!-- form tambah -->
    <form action="simpan" method="post" enctype="multipart/form-data">
      <div class="mb-3">
        <label for="id_alumni" class="form-label font-form">Alumni</label>
        <select name="id_alumni" id="id_alumni" class="form-control">
          @foreach($alumni as $a)
          <option value="{{$a->id_alumni}}">{{$a->nama}}</option>
          @endforeach
        </select>
      </div>
      <div class="mb-3">
        <input type="hidden" class="form-control" name="id_kerja" value="{{$tkerja->id_kerja}}" />
        <label for="instansi" class="form-label font-form">Instansi</label>
        <input type="text" class="form-control" id="instansi" placeholder="Instansi" name="instansi" style="border-radius:  1.8635607321131447vh;" required value="{{$tkerja->instansi}}" />
      </div>
      <div class="mb-3">
        <label for="jabatan" class="form-label font-form">Jabatan</label>
        <input type="text" class="form-control" id="jabatan" placeholder="Jurusan kerja" name="jabatan" style="border-radius:  1.8635607321131447vh;" required value="{{$tkerja->jabatan}}">
        @csrf
      </div>
      <a href="/kerja" class="btn btn-warning" style="font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;">Kembali</a>
      <button type="submit" class="btn btn-primary" style="font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;">Submit</button>
    </form>
    <!-- end form tambah -->
  </div>
</div>
@endsection
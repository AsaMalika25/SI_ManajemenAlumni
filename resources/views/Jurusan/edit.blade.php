@extends('layout.layouts')
@section('content')                   
<div class="card" style="width: 85.86762075134168vh; margin:auto; border-radius: 2.862254025044723vh; margin-top: 15%;">
  <div class="card-body">
    <div class="text-center">
      <h1 class="h4 text-gray-900 mb-4 font-nav"><b>Form Edit Jurusan</b></h1>
      <br>
    </div>
    <form action="simpan" method="post">
      @csrf
      <div class="mb-3">
        <label for="inputNama" class="form-label font-form">Nama Jurusan</label>   
        <input type="hidden" class="form-control" name="id_jurusan" style="border-radius:  1.8635607321131447vh;" value="{{ $tjurusan->id_jurusan }}">
         <input type="text" class="form-control" id="inputNama" name="nama_jurusan" style="border-radius:  1.8635607321131447vh;" value="{{$tjurusan -> nama_jurusan}}">
      </div>

      <a href="/jurusan" class="btn btn-warning" style="font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;">Kembali</a>
      <button type="submit" class="btn btn-primary" style="font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;">Submit</button>
    </form>
    <!-- end form tambah -->
  </div>
</div>
@endsection

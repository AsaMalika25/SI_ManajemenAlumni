@extends('layout.layouts')
@section('content')
<div class="card" style="width: 85.86762075134168vh; margin:auto; border-radius: 2.862254025044723vh; margin-top: 8%">
  <div class="card-body">
    <!-- text judul   -->
    <div class="text-center">
      <h1 class="h4 text-gray-900 mb-4 font-nav"><b>Form Edit kelas</b></h1>
    </div>
    <!-- end text judul -->

    <!-- form -->
    <form action="simpan" method="post">
      @csrf
      <div class="mb-3">
        <label for="inputNama" class="form-label font-form">Nama Kelas</label>

        <input type="hidden" class="form-control" value="{{$kelas->id_kelas}}" name="id_kelas">
        <input type="text" class="form-control" id="inputNama" name="nama_kelas" style="border-radius:  1.8635607321131447vh;" required value="{{$kelas->nama_kelas}}">
      </div>
      <div class="mb-3">
        <label for="inputNama" class="form-label font-form">Jurusan</label>
        <select name="id_jurusan" class="form-control">
          @foreach ($jurusan as $jur)
          <option value="{{ $jur->id_jurusan }}">{{ $jur->nama_jurusan }}
          </option>
          @endforeach
        </select>
      </div>

      <div class="mb-3">
        <label for="inputNama" class="form-label font-form">Angkatan</label>
        <select name="id_angkatan" class="form-control">
          @foreach ($angkatan as $ang)
          <option value="{{ $ang->id_angkatan }}">{{ $ang->no_angkatan }}
          </option>
          @endforeach
        </select>
      </div>
      <a href="/kelas" class="btn btn-warning" style="font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;">Kembali</a>
      <button type="submit" class="btn btn-primary" style="font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;">Submit</button>
    </form>
    <!-- end form -->
  </div>
</div>
@endsection
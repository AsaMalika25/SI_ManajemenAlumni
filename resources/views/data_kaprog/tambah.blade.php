@extends('layout.layouts')
@section('content')
<div class="card" style="width: 85.86762075134168vh; margin:auto; border-radius: 2.862254025044723vh; margin-top: 2rem; margin-bottom: 14.311270125223613vh;">
  <div class="card-body">

    <div class="text-center">
      <h1 class="h4 text-gray-900 font-nav"><b>Form Tambah Kaprog</b></h1>
      <br>
    </div>

    <form action="simpan" method="post">
      <label style="color: black;">Id Akun</label>
      <select name="id_akun" required class="form-control">
        @foreach($takun as $u)
        <option value="{{$u->id_akun}}">{{$u->username}}</option>
        @endforeach
      </select><br>
      <label style="color: black;">Jurusan</label>
      <select name="id_jurusan" required class="form-control">
        @foreach($tjurusan as $u)
        <option value="{{$u->id_jurusan}}">{{$u->nama_jurusan}}</option>
        @endforeach
      </select><br>

      <label style="color: black;">Nama Kaprog</label>
      <input type="text" class="form-control" name="nama_kaprog" aria-label="First name"><br>

      <label style="color: black;">Email</label>
      <input type="text" class="form-control" name="email" aria-label="First name">
      <a href="/kaprog" class="btn btn-warning" style="font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;  margin-top: 1rem;">Kembali</a>
      <button type="submit" class="btn btn-primary" style="font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif; margin-top: 1rem;">Submit</button>
      @csrf
    </form>
  </div>
</div>
@endsection
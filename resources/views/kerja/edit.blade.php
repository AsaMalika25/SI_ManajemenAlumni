@extends('layout.layouts')
@section('content')   
    <!-- konten utama -->
    <!-- div one page -->
    <div class="card" style="width: 85.86762075134168vh; margin:auto; border-radius: 2.862254025044723vh; margin-top: 7rem; margin-bottom: 14.311270125223613vh;">
        <div class="card-body">
          <!-- text judul   -->
          <div class="text-center">
            <h1 class="h4 text-gray-900 mb-4 font-nav">Edit Form Kerja</h1>
            <br>
          </div>
          <!-- end text judul -->
             
          <!-- form tambah -->
          <form action="simpan" method="post" enctype="multipart/form-data"> 
          <div class="mb-3" >
                <label for="id_alumni" class="form-label font-form">alumni</label>
                <select name="id_alumni" id="id_alumni" class="form-control">
                    @foreach($alumni as $a)
                    <option value="{{$a->id_alumni}}">{{$a->nama}}</option>
                    @endforeach
                </select>
              </div>
          <div class="mb-3" >
              <input type="hidden" class="form-control" name="id_kerja"  value="{{$tkerja->id_kerja}}"/>
              <label for="instansi" class="form-label font-form">Instansi</label>
              <input type="text" class="form-control" id="instansi" placeholder="Instansi" name="instansi" style="border-radius:  1.8635607321131447vh;" required value="{{$tkerja->instansi}}"/>
            </div>
            <div class="mb-3" >
              <label for="jabatan" class="form-label font-form">Jabatan</label>
              <input type="text" class="form-control" id="jabatan" placeholder="Jurusan kerja" name="jabatan" style="border-radius:  1.8635607321131447vh;" required value="{{$tkerja->jabatan}}">
              @csrf
            </div>

            <button type="submit" class="btn btn-primary" style="font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;">Submit</button>
          </form>
          <!-- end form tambah -->
        </div>
      </div>
        <!-- end konten utama -->
      </div> 
      <!-- end one page -->  
@endsection
@extends('layout.layouts')
@section('content')
<div class="container mt-5 align-item-center" style="background-repeat: no-repeat; background-size: cover; background-position: center;">
        <div class="card" style="width: 30rem; margin:auto; border-radius: 2.862254025044723vh; margin-bottom: 14.311270125223613vh;">
        <!-- <div class="card" style="width: 85.86762075134168vh; margin:auto; border-radius: 2.862254025044723vh; margin-top: 7rem; margin-bottom: 14.311270125223613vh;"> -->
        <div class="card-body">
          <!-- text judul   -->
          <div class="text-center">
            <h1 class="h4 text-gray-900 mb-4 font-nav">Edit Profil</h1>
            <br>
          </div>
          <!-- end text judul -->
    
          <!-- form tambah -->
          <form action="simpan" method="post" enctype="multipart/form-data"> 
            <div class="mb-3" >
              <input type="hidden" class="form-control" name="" value=""/>
              <label for="nama_Lengkap" class="form-label font-form">Nama Lengkap</label>
              <input type="text" class="form-control" id="namaLengkap" placeholder="Nama Lengkap" name="nama_Lengkap" style="border-radius:  1.8635607321131447vh;"  value=""required>
            </div>
            <div class="mb-3" >
              <label for="bidang" class="form-label font-form">Tempat, tanggal Lahir</label>
              <input type="date" class="form-control" id="bidangLengkap" placeholder="Bidang Lengkap" name="ttl" style="border-radius:  1.8635607321131447vh;"  value=""required>
            </div>
            <div class="form-group mt-2">
                <label>Alamat</label>
                <input type="text" class="form-control" name="gambar_Lengkap" value="">  
            <br>
            @csrf
            </div>

            <button type="submit" class="btn btn-primary" style="font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;">Submit</button>
          </form>
          <!-- end form tambah -->
        </div>
    </div>
        </div>
    </div>
@endsection


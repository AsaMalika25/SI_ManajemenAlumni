@extends('layout.layouts')
@section('content')
<div class="container mt-5 align-item-center" style="background-repeat: no-repeat; background-size: cover; background-position: center;">
  <h1 class="d-flex justify-content-center" style="color: #fff; font-family: poppins;"><b>LIST DATA KULIAH</b></h1>
  <br>
  <div class="justify-content-center d-flex">
    <div class="tab-content justify-content-center" style="max-width: max-content;">
      <div class="card" style="width: 123.02284710017575vh; margin:auto; border-radius: 2.862254025044723vh; margin-bottom: 3vh;">
      <!-- <span class="card-header"> Jumlah Data Kuliah : {{ $jumlahkuliah ?? 0 }}</span> -->
        <div class="card-body">

          <!-- tabel -->
          <table class="table DataTable">
            
            <!-- head tabel -->
            <thead>
              <tr>
                <th class="font-table" scope="col">No</th>
                <th class="font-table" scope="col">Alumni</th>
                <th class="font-table" scope="col">Nama Lembaga</th>
                <th class="font-table" scope="col">Jurusan Kuliah</th>
                <th class="font-table" scope="col">Aksi</th>
              </tr>
            </thead>
            <!-- end head tabel -->

            <!-- body tabel -->
            <tbody>
              @foreach($alumni as $r)
              <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $r->nama }}</td>
                <td>{{ $r->nama_lembaga }}</td>
                <td>{{ $r->jurusan_kuliah }}</td>
                <td>
                  <btn class="btnHapus" idKuliah="{{ $r->id_kuliah }}"><img src="{{asset('img/trash.png')}}" alt="" style="width: 25px;height:25px;"></btn>
                  <a href="kuliah/edit/{{$r->id_kuliah}}"><img src="{{asset('img/edit.png')}}" alt="" style="width: 30px;"></a>
                </td>
              </tr>
              @endforeach
            </tbody>
            <!-- end body tabel -->
          </table>
          <!-- end tabel -->
        </div>
      </div>
      <div>
        <a class="btn btn-primary" href="kuliah/tambah" role="button">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-lg" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2Z" />
          </svg>
          TAMBAH
        </a>
      </div>
    </div>
  </div>
</div>

<script type="module">
  $('.DataTable tbody').on('click', '.btnHapus', function(a) {
    a.preventDefault();
    let idKuliah = $(this).closest('.btnHapus').attr('idKuliah');
    swal.fire({
      title: "Apakah anda ingin menghapus data ini?",
      showCancelButton: true,
      confirmButtonText: 'Setuju',
      cancelButtonText: `Batal`,
      confirmButtonColor: 'red'

    }).then((result) => {
      if (result.isConfirmed) {
        //Ajax Delete
        $.ajax({
          type: 'DELETE',
          url: "kuliah/hapus/" + idKuliah,
          data: {
            id_kuliah: idKuliah,
            _token: "{{csrf_token()}}"
          },
          success: function(data) {
            if (data.success) {
              swal.fire('Berhasil di hapus!', '', 'success').then(function() {
                //Refresh Halaman
                location.reload();
              });
            }
          }
        });
      }
    });
  });
  $(document).ready(function() {
    $('.DataTable').DataTable();
  });
</script>

@endsection
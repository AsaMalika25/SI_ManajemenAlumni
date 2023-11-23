@extends('layout.layouts')
@section('content')
<div class="container mt-5 align-item-center" style="background-repeat: no-repeat; background-size: cover; background-position: center; z-index: -10;">
  <h1 class="d-flex justify-content-center" style="color: #fff; font-family: poppins;"><b>LIST DATA JENIS BERITA</b></h1>
  <br>
  <div class="justify-content-center d-flex">
    <div class="tab-content justify-content-center" style="max-width: max-content;">
      <div class="card" style="width: 123.02284710017575vh; margin:auto; border-radius: 2.862254025044723vh; margin-bottom: 3vh;">
      <div class="card-header">
        <span>Jumlah Jenis Berita : {{ $jumlahJenisBerita ?? 0 }}</span>
      </div>
        <div class="card-body">
          <!-- tabel -->
          <table class="table DataTable">
            <!-- head tabel -->
            <thead>
              <tr>
                <th class="font-table" scope="col">id</th>
                <th class="font-table" scope="col">jenis_berita</th>
                <th class="font-table" scope="col">Aksi</th>
              </tr>
            </thead>
            <!-- end head tabel -->
              
            <!-- body tabel -->
            <tbody>
              @foreach($jenis_berita as $r)
              <tr>
                <td>{{$r->id_jenis_berita}}</td>
                <td>{{$r->jenis_berita}}</td>
                <td>
                  <btn class="btnHapus" idJenisBerita="{{ $r->id_jenis_berita }}"><img src="{{asset('img/trash.png')}}" alt="" style="width: 30px;"></btn>
                  <a href="jenis_berita/edit/{{$r->id_jenis_berita}}"><img src="{{asset('img/edit.png')}}" alt="" style="width: 30px;"></a>
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
        <a class="btn btn-primary" href="jenis_berita/tambah" role="button">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-lg" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2Z" />
          </svg>
          TAMBAH
        </a>
      </div>
    </div>
  </div>
</div>
<!-- end konten utama -->
</div>
<script type="module">
  $('.DataTable tbody').on('click', '.btnHapus', function(a) {
    a.preventDefault();
    let idJenisBerita = $(this).closest('.btnHapus').attr('idJenisBerita');
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
          url: "jenis_berita/hapus/" + idJenisBerita,
          data: {
            id_jenis_berita: idJenisBerita,
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
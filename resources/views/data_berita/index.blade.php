@extends('layout.layouts')
@section('content')
<div class="container mt-5 align-item-center" style="background-repeat: no-repeat; background-size: cover; background-position: center;">
  <h1 class="d-flex justify-content-center" style="color: #fff; font-family: poppins;"><b>LIST DATA BERITA</b></h1>
  <br>
  <div class="justify-content-center d-flex">
    <div class="tab-content justify-content-center" style="max-width: max-content;">
      <div class="card" style="width: 100%; border-radius: 2.862254025044723vh; margin-bottom: 3vh;">
        <div class="card-body">

          <!-- tabel -->
          <table class="table DataTable ">
            <!-- head tabel -->
            <thead>
              <tr>
                <th class="font-table" scope="col">No</th>
                <th class="font-table" scope="col">Judul</th>
                <th class="font-table" scope="col">Tanggal Post</th>
                <th class="font-table" scope="col">Jenis Berita</th>
                <th class="font-table" scope="col">Keterangan</th>
                <th class="font-table" scope="col">Gambar Berita</th>
                <th class="font-table" scope="col">Aksi</th>
              </tr>
            </thead>
            <!-- end head tabel -->

            <!-- body tabel -->
            <tbody>
              <tr></tr>
              @foreach($tberita as $r)
              <tr>
                <th scope="row">{{$r->id_berita}}</th>
                <td>{{$r->judul_berita}}</td>
                <td>{{$r->tgl_post}}</td>
                <td>{{$r->jenis_berita}}</td>
                <td>{{$r->ket_berita}}</td>
                <td>
                  @if ($r->file)
                  <img src="{{url('foto') . '/' . $r->file}}" value="{{$r->file}}" style="max-width: 100px; height:100px;" />
                  @endif
                </td>
                <td>
                  <a href="berita/detail/{{ $r->id_berita }}"><img src="{{asset('img/gambar-seru.png')}}" alt="" style="width: 20px;height:20px;"></a>
                  <btn class="btnHapus" idBerita="{{ $r->id_berita }}"><img src="{{asset('img/trash.png')}}" alt="" style="width: 20px;height:20px;"></btn>
                  <a href="berita/edit/{{$r->id_berita}}"><img src="{{asset('img/edit.png')}}" alt="" style="width: 20px;height:20px;"></a>
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
        <a class="btn btn-primary" href="#" role="button">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-download" viewBox="0 0 16 16">
            <path d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z" />
            <path d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z" />
          </svg>
          CETAK
        </a>
        <a class="btn btn-primary" href="berita/tambah" role="button">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-lg" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2Z" />
          </svg>
          TAMBAH
        </a>
      </div>
    </div>
  </div>
  <!-- end konten utama -->
</div>
<script type="module">
  $('.DataTable tbody').on('click', '.btnHapus', function(a) {
    a.preventDefault();
    let idBerita = $(this).closest('.btnHapus').attr('idBerita');
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
          url: "berita/hapus/" + idBerita,
          data: {
            id_berita: idBerita,
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
@extends('layout.layouts')
@section('content')
<div class="container mt-5 align-item-center" style="background-repeat: no-repeat; background-size: cover; background-position: center;">
  <h1 class="d-flex justify-content-center" style="color: #fff; font-family: poppins;"><b>LIST JURUSAN</b></h1>
  <br>
  <div class="justify-content-center d-flex">
    <div class="tab-content justify-content-center" style="max-width: max-content;">
      <div class="card" style="width: 123.02284710017575vh; margin:auto; border-radius: 2.862254025044723vh; margin-bottom: 3vh;">
        <div class="card-body">

          <!-- tabel -->
          <table class="table Datatable">
            <!-- head tabel -->
            <thead>
              <tr>
                <th class="font-table">Nama Jurusan</th>
                <th class="font-table">Aksi</th>
              </tr>
            </thead>
            <!-- end head tabel -->

            <!-- body tabel -->
            <tbody>
              <tr>
                @foreach ($jurusan as $item)
                <td>{{$item->nama_jurusan}}</td>
                <td>
                  <a href="{{url('jurusan/edit/' .$item->id_jurusan)}}" class="btn btn-success">Edit</a>
                  <btn class="btn btn-danger btnHapus" idJurusan="{{$item->id_jurusan}}">HAPUS
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>

      <a class="btn btn-primary" href="{{url('jurusan/tambah')}}" role="button">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-lg" viewBox="0 0 16 16">
          <path fill-rule="evenodd" d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2Z" />
        </svg>
        TAMBAH
      </a>
    </div>
  </div>
  <!-- end konten utama -->
</div>
<script type="module">
  $('.Datatable tbody').on('click', '.btnHapus', function(a) {
    a.preventDefault();
    let idJurusan = $(this).closest('.btnHapus').attr('idJurusan');
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
          url: 'jurusan/hapus/' + idJurusan,
          data: {
            id_jurusan: idJurusan,
            _token: "{{ csrf_token() }}"
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
    $('.Datatable').DataTable();
  });
</script>
@endsection
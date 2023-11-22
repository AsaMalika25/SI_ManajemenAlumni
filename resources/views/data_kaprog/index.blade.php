@extends('layout.layouts')
@section('content')

<div class="container mt-5 align-item-center" style="background-repeat: no-repeat; background-size: cover; background-position: center;">
  <h1 class="d-flex justify-content-center" style="color: #fff; font-family: poppins;"><b>LIST DATA KAPROG</b></h1>
  <br>
  <div class="justify-content-center d-flex">
    <div class="tab-content justify-content-center" style="max-width: max-content;">
      <div class="card" style="width: 123.02284710017575vh; margin:auto; border-radius: 2.862254025044723vh; margin-bottom: 3vh;">
        <div class="card-body">
          <!-- tabel -->
          <table class="table DataTable">
            <!-- head tabel -->
            <thead>
              <tr>
                <th class="font-table">Id</th>
                <th class="font-table">Username Akun</th>
                <th class="font-table">Jurusan</th>
                <th class="font-table">Nama</th>
                <th class="font-table">Email</th>
                <th class="font-table">Aksi</th>
              </tr>
            </thead>
            <!-- end head tabel -->

            <!-- body tabel -->
            <tbody>

              @foreach ($kaprog as $r)
              <tr>
                <td>{{$r->id_kaprog}}</td>
                <td>{{$r->username}}</td>
                <td>{{$r->nama_jurusan }}</td>
                <td>{{$r->nama_kaprog}}</td>
                <td>{{$r->email}}</td>
                <td>
                  <a href="{{url('kaprog/edit/' .$r->id_kaprog)}}" class="btn btn-success">Edit</a>
                  <btn class="btnHapus btn btn-danger" idKaprog="{{ $r->id_kaprog }}">HAPUS</btn>
                </td>
              </tr>
            </tbody>
            @endforeach
            <!-- end body tabel -->
          </table>
          <!-- end tabel -->
        </div>
      </div>
      <div>
        <a class="btn btn-primary" href="{{url('kaprog/tambah')}}" role="button">
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
    let idKaprog = $(this).closest('.btnHapus').attr('idKaprog');
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
          url: "kaprog/hapus/" + idKaprog,
          data: {
            id_kaprog: idKaprog,
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
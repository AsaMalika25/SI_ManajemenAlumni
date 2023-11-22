@extends('layout.layouts')
@section('content')

<div class="container mt-5 align-item-center" style="background-repeat: no-repeat; background-size: cover; background-position: center;">
    <h1 class="d-flex justify-content-center" style="color: #fff; font-family: poppins;"><b>List Kelas</b></h1>
    <div class="card" style="min-width:123.02284710017575vh; margin:auto; border-radius: 2.862254025044723vh; margin-bottom: 10.311270125223613vh;">
        <div class="card-header">
            <span>Jumlah Data Kelas : {{$jumlahKelas}}</span>
        </div>
        <div class="card-body">
            <!-- tabel -->
            <table class="table DataTable">
                <!-- head tabel -->
                <thead>
                    <tr>
                        <th class="font-table">Kelas</th>
                        <th class="font-table">Angkatan</th>
                        <th class="font-table">Jurusan</th>
                        <th class="font-table">Aksi</th>
                    </tr>
                </thead>
                <!-- end head tabel -->
                <!-- body tabel -->
                <tbody>
                    @foreach($kelas as $item)
                    <tr>
                            <td>{{ $item->nama_kelas }}</td>
    
                            <td>{{ $item->no_angkatan }}</td>
                    
                            <td>{{ $item->nama_jurusan }}</td>
                          
                            
                            <td>
                                <a href="{{ url('kelas/edit/'. $item->id_kelas) }}" class="btn btn-success">Edit</a>
                                <btn class="btn btn-danger btnHapus" idKelas="{{$item->id_kelas}}">HAPUS
                            </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <!-- end tabel -->
        </div>
    </div>

    <a class="btn btn-primary" href="{{ url('kelas/tambah') }}" role="button">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-lg"
            viewBox="0 0 16 16">
            <path fill-rule="evenodd"
                d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2Z" />
        </svg>
        TAMBAH
    </a>
    
</div>

</div>
<!-- end konten utama -->
</div>



<script type="module">
    $('.DataTable tbody').on('click', '.btnHapus', function(a) {
        a.preventDefault();
        let idKelas = $(this).closest('.btnHapus').attr('idKelas');
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
                    url: 'kelas/hapus/' + idKelas,
                    data: {
                        id_kelas: idKelas,
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
            $('.DataTable').DataTable();
        });
</script>
@endsection

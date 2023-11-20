@extends('layout.layouts')
@section('content')
<div class="container mt-5 align-item-center"
    style="background-repeat: no-repeat; background-size: cover; background-position: center;">
    <h1 class="d-flex justify-content-center" style="color: #fff; font-family: poppins;"><b>LIST DATA ALUMNI</b></h1>
    <br>
    <div class="tab-content" id="pills-tabContent">
        <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
            <div class="card"
                style="width: 123.02284710017575vh; margin:auto; border-radius: 2.862254025044723vh; margin-bottom: 14.311270125223613vh;">
                <div class="card-header">
                    <span>jumlah Alumni : {{$jumlah_alumni}}</span>
                </div>
                <div class="card-body">

                    <!-- tabel -->
                    <table class="table Datatable">
                        <!-- head tabel -->
                        <thead>
                            <tr>
                                <th class="font-table" scope="col">No</th>
                                <th class="font-table" scope="col">Nama</th>
                                <th class="font-table" scope="col">Angkatan</th>
                                <th class="font-table" scope="col">SosMed</th>
                                <th class="font-table" scope="col">kelas</th>
                                <th class="font-table" scope="col">Ijazah</th>
                                
                            </tr>
                        </thead>
                        <!-- end head tabel -->

                        <!-- body tabel -->
                        <tbody>
                            
                            @foreach($alumni as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->nama }}</td>
                                <td>{{ $item->no_angkatan }}</td>
                                <td>{{ $item->sosmed}}</td>
                                <td>{{ $item->nama_kelas }}</td>
                                <td>
                                    @if($item->ijazah)
                                        <img src="{{ url('foto') . '/' . $item->ijazah }} "
                                            style="max-width: 50px; height: auto;" />
                                    @endif
                                </td>

                                
                                {{-- <td>{{ $item->username }}</td> --}}
                                {{-- <td>{{ $item->nama}}</td> --}}
                            </tr>
                        @endforeach
                        </tbody>
                        <!-- end body tabel -->
                    </table>
                    <!-- end tabel -->
                </div>
            </div>
        </div>
    </div>
    <!-- end konten utama -->
</div>
<script type="module">
    $('.Datatable tbody').on('click', '.btnHapus', function(a) {
            a.preventDefault();
            let idAlumni = $(this).closest('.btnHapus').attr('idAlumni');
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
                        type: 'post',
                        url: 'alumni/hapus',
                        data: {
                            id_alumni: idAlumni,
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

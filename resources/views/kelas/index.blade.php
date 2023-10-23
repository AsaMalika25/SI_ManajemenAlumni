@extends('layout.layouts')
@section('content')
  
<div class="container mt-5 align-item-center" style="background-repeat: no-repeat; background-size: cover; background-position: center;">
    <h1 class="d-flex justify-content-center" style="color: #fff; font-family: poppins;"><b>LIST kelas</b></h1>
    <br>
   
            <div class="card" style="width: 123.02284710017575vh; margin:auto; border-radius: 2.862254025044723vh; margin-bottom: 14.311270125223613vh;">
                <a class="btn btn-primary" href="{{url('kelas/tambah')}}" role="button">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-lg" viewBox="0 0 16 16">
                      <path fill-rule="evenodd" d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2Z"/>
                    </svg>
                  TAMBAH
                  </a>
                <div class="card-body">  
      
                  <!-- tabel -->
                  <table class="table Datatable">
                    <!-- head tabel -->
                    <thead>
                      <tr>
                        <th class="font-table" scope="col">Nama kelas</th>
                        <th class="font-table" scope="col">no angkatan</th>
                        <th class="font-table" scope="col">nama jurusan</th>
                        <th class="font-table" scope="col" colspan="2">Aksi</th>
                      </tr>
                    </thead>
                    <!-- end head tabel -->
      
                    <!-- body tabel -->
                    <tbody>
                      @foreach ($kelas as $item)
                        <td>{{$item->nama_kelas}}</td>
                      @endforeach
                      @foreach ($angkatan as $item)
                        <td>{{$item->no_angkatan}}</td>
                      @endforeach
                      @foreach ($jurusan as $item)
                        <td>{{$item->nama_jurusan}}</td>
                      @endforeach

                      <td>
                        <a href="{{url('angkatan/edit/')}}" class="btn btn-success">Edit</a>
                        <btn class="btn btn-danger btnHapus" idAngkatan="">HAPUS
                      </td>
                    </tbody>
                      {{-- <td>{{$item->nama_kelas}}</td> --}}
                     {{-- @foreach ($data as $item)
                        <tr>
                            <td>{{$item->nama_kelas}}</td>
                            <td>{{$item->nama_jurusan}}</td>
                            <td>{{$item->no_angkatan}}</td>
                            <td>
                                <a href="{{url('angkatan/edit/')}}" class="btn btn-success">Edit</a>
                                <btn class="btn btn-danger btnHapus" idAngkatan="">HAPUS
                            </td>
                                
                        </tr>
                     @endforeach --}}
                      
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
        let idAngkatan = $(this).closest('.btnHapus').attr('idAngkatan');
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
                    url: 'angkatan/hapus',
                    data: {
                        id_angkatan: idAngkatan,
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
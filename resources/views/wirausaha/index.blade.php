@extends('layout.layouts')
@section('content')
<div class="container mt-5 align-item-center" style="background-repeat: no-repeat; background-size: cover; background-position: center;">
        <h1 class="d-flex justify-content-center" style="color: #fff; font-family: poppins;"><b>LIST DATA WIRAUSAHA</b></h1>
        <br>
       
          <div class="tab-content" id="pills-tabContent">   
           
                <div class="card" style="width: 123.02284710017575vh; margin:auto; border-radius: 2.862254025044723vh; margin-bottom: 14.311270125223613vh;">
                    <div class="card-body">  
          
                      <!-- tabel -->
                      <table class="table">
                        <!-- head tabel -->
                        <h3 class="card-title"> Jumlah : {{ $jumlahwirausaha ?? 0 }}</h3><br><br>
                        <thead>
                          <tr>
                          <th class="font-table" scope="col">Id</th>
                            <th class="font-table" scope="col">Nama Usaha</th>
                            <th class="font-table" scope="col">Bidang Usaha</th>
                            <th class="font-table" scope="col">Gambar Usaha</th>
                            <th class="font-table" scope="col" colspan="2">Aksi</th>
                          </tr>
                        </thead>
                        <!-- end head tabel -->
          
                        <!-- body tabel -->
                        <tbody>
                          <tr></tr>
                          @foreach($tusaha as $r)
                          <tr>  
                            <th scope="row">{{$r->id_wirausaha}}</th>
                            <td>{{$r->nama_usaha}}</td>
                            <td>{{$r->bidang}}</td>
                            <!-- <td><img src="{{$r->gambar_usaha}}" alt=""><{{$r->gambar_usaha}}></td> -->
                            <td><img src='/foto/{{$r->gambar_usaha}}' width='200px'/></td>
                            
                            <td>
                              <a href=""><img src="{{asset('img/gambar-seru.png')}}" alt="" style="width: 30px;"></a>
                              <!-- <form action="{{url('wirausaha/hapus/'. $r->id_wirausaha)}}" method="post" onsubmit="return confirm('apakah anda ingin menghapus data?')">
                                <button type="submit"><img src="{{asset('img/trash.png')}}" alt="" style="width: 30px;"></button>
                                @csrf
                              </form> -->
                              <btn class="btnHapus" idWirausaha="{{ $r->id_wirausaha }}"><img src="{{asset('img/trash.png')}}" alt="" style="width: 20px;height:20px;"></btn>
                              <a href="wirausaha/edit/{{$r->id_wirausaha}}"><img src="{{asset('img/edit.png')}}" alt="" style="width: 30px;"></a>
                            </td>
                          </tr>
                          @endforeach
                        </tbody>
                        <!-- end body tabel -->
                      </table>
                      <!-- end tabel -->
                    </div>
                </div>
                <div style="margin-left: 5rem;">
                <a class="btn btn-primary" href="tusaha/edit/{id}" role="button"> 
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-download" viewBox="0 0 16 16">
                    <path d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z"/>
                    <path d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z"/>
                  </svg>
                CETAK
                </a>
                <a class="btn btn-primary" href="tambah_wirausaha" role="button">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-lg" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2Z"/>
                  </svg>
                TAMBAH
                </a>
                <a class="btn btn-primary" href="/logs_wirausaha" role="button">LOG</a>
              </div>
              </div>
            </div>
          </div>
        <!-- end konten utama -->
      </div>
      <script type="module">
    $('.DataTable tbody').on('click','.btnHapus',function(a){
        a.preventDefault();
        let idWirausaha = $(this).closest('.btnHapus').attr('idWirausaha');
        swal.fire({
            title : "Apakah anda ingin menghapus data ini?",
            showCancelButton: true,
            confirmButtonText: 'Setuju',
            cancelButtonText: `Batal`,
            confirmButtonColor: 'red'

        }).then((result)=>{
            if(result.isConfirmed){
                //Ajax Delete
                $.ajax({
                    type: 'DELETE',
                    url: "wirausaha/hapus/"+idWirausaha,
                    data: {
                        id_wirausaha : idWirausaha,
                        _token : "{{csrf_token()}}"
                    },
                    success : function(data){
                        if(data.success){
                            swal.fire('Berhasil di hapus!', '', 'success').then(function(){
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


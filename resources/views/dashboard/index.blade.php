@extends('layout.layouts')
@section('content')
<div class="container" style="margin-top: 1rem;">
        <div>
            <h1 style="color: white;">Dashboard</h1>
        </div>
        <div class="d-flex">
            <h3 style="color: white; margin-right: 1%;">Welcome, </h3><h3 style="color: rgb(60, 60, 138);"> SuperAdmin!</h3>
        </div>
    </div>
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title">Jumlah Seluruh Alumni SMKN 1 Kota Bekasi</h5>
            </div>
            <div class="card-body">
                <div class="d-flex">
                    <i class="fa fa-user fa-lg" style="font-size: xx-large;"></i><h2 class="card-text" style="padding-top: 6px;">2100</h2>
                </div>
              <a href="#" class="btn btn-primary" style="margin-top: 1%;">Selengkapnya >></a>
            </div>
          </div>
          <br>
          <div class="justify-content-center row mx-0">
            <div class="card border-success mb-3 m-0 col me-2" style="max-width: 18rem; border-radius: 10px">
                <div class="card-header bg-transparent border-success">Alumni Kerja</div>
                <div class="card-body text-success" style="text-align: center;">
                  <h2 class="card-title" ><i class="fa fa-briefcase fa-lg" style="font-size: 70px;" aria-hidden="true"></i></h2><br>
                  <h6 class="card-text"><b>Jumlah Alumni yang sedang bekerja sejumlah : 200 orang</b></h6>
                </div>
                <div class="card-footer bg-transparent border-success"><a href="">Selengkapnya >></a></div>
            </div>
            <div class="card border-primary mb-3 m-0 col me-2" style="max-width: 18rem; border-radius: 10px">
                <div class="card-header bg-transparent border-primary">Alumni Kuliah</div>
                <div class="card-body text-primary" style="text-align: center;">
                  <h2 class="card-title"><i class="fa fa-book fa-lg" style="font-size: 70px;" aria-hidden="true"></i></h2><br>
                  <h6 class="card-text"><b>Jumlah Alumni yang sedang kuliah sejumlah : 200 orang</b></h6>
                </div>
                <div class="card-footer bg-transparent border-primary"><a href="">Selengkapnya >></a></div>
            </div>
            <div class="card border-warning mb-3 m-0 col me-2" style="max-width: 18rem; border-radius: 10px">
                <div class="card-header bg-transparent border-warning">Alumni Wirausaha</div>
                <div class="card-body text-warning" style="text-align: center;">
                  <h2 class="card-title"><i class="fa fa-money fa-lg" style="font-size: 70px;" aria-hidden="true"></i></h2><br>
                  <h6 class="card-text"><b>Jumlah Alumni yang sedang berwirausaha sejumlah : 200 orang</b></h6>
                </div>
                <div class="card-footer bg-transparent border-warning"><a href="">Selengkapnya >></a></div>
            </div>
            <div class="card border-success mb-3 m-0 col" style="max-width: 18rem; border-radius: 10px">
                <div class="card-header bg-transparent border-danger">Alumni Tidak Berstatus</div>
                <div class="card-body text-danger" style="text-align: center;">
                  <h2 class="card-title"><i class="fa fa-minus-circle fa-lg" style="font-size: 70px;" aria-hidden="true"></i></h2><br>
                  <h6 class="card-text"><b>Jumlah Alumni yang tidak berstatus sejumlah : 200 orang</b></h6>
                </div>
                <div class="card-footer bg-transparent border-danger"><a href="">Selengkapnya >></a></div>
            </div>
          </div>
    </div> 
<script type="module">
    $('.DataTable tbody').on('click','.btnHapus',function(a){
        a.preventDefault();
        let idBerita = $(this).closest('.btnHapus').attr('idBerita');
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
                    url: "berita/hapus/"+idBerita,
                    data: {
                        id_berita : idBerita,
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
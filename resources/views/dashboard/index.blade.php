@extends('layout.layouts')
@section('content')
<div class="container align-item-center ml-5" style="margin-top: 1rem;">
        <div>
            <h1 style="color: white; font-size:50px;">Dashboard</h1>
        </div>
        <div class="d-flex">
          @if (Auth::check())
            <h3 style="color: white; margin-right: 1%; font-size:50px;">Welcome, {{auth()->user()->username}}</h3><h3 style="color: rgb(60, 60, 138);"></h3>
          @endif
        </div>
    </div>
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title">Jumlah Seluruh Alumni SMKN 1 Kota Bekasi</h5>
            </div>
            <div class="card-body">
                <div class="d-flex">
                    <i class="fa fa-user fa-lg" style="font-size: xx-large;"></i><h2 class="card-text" style="padding-top: 6px;">{{$total_alumni}} orang</h2>
                </div>
            </div>
          </div>
          <br>
          <div class="justify-content-center row mx-0">
            <div class="card border-success mb-3 m-0 col me-2" style="max-width: 18rem; border-radius: 10px">
                <div class="card-header bg-transparent border-success">Alumni Kerja</div>
                <div class="card-body text-success" style="text-align: center;">
                  <h2 class="card-title" ><i class="fa fa-briefcase fa-lg" style="font-size: 70px;" aria-hidden="true"></i></h2><br>
                  <h6 class="card-text"><b>Jumlah Alumni yang sedang bekerja sejumlah : {{$alumni_kerja}} orang</b></h6>
                </div>
            </div>
            <div class="card border-primary mb-3 m-0 col me-2" style="max-width: 18rem; border-radius: 10px">
                <div class="card-header bg-transparent border-primary">Alumni Kuliah</div>
                <div class="card-body text-primary" style="text-align: center;">
                  <h2 class="card-title"><i class="fa fa-book fa-lg" style="font-size: 70px;" aria-hidden="true"></i></h2><br>
                  <h6 class="card-text"><b>Jumlah Alumni yang sedang kuliah sejumlah : {{$alumni_kuliah}} orang</b></h6>
                </div>
            </div>
            <div class="card border-warning mb-3 m-0 col me-2" style="max-width: 18rem; border-radius: 10px">
                <div class="card-header bg-transparent border-warning">Alumni Wirausaha</div>
                <div class="card-body text-warning" style="text-align: center;">
                  <h2 class="card-title"><i class="fa fa-money fa-lg" style="font-size: 70px;" aria-hidden="true"></i></h2><br>
                  <h6 class="card-text"><b>Jumlah Alumni yang sedang berwirausaha sejumlah : {{$alumni_usaha}} orang</b></h6>
                </div>
            </div>
            <div class="card border-success mb-3 m-0 col" style="max-width: 18rem; border-radius: 10px">
                <div class="card-header bg-transparent border-danger">Alumni Tidak Berstatus</div>
                <div class="card-body text-danger" style="text-align: center;">
                  <h2 class="card-title"><i class="fa fa-minus-circle fa-lg" style="font-size: 70px;" aria-hidden="true"></i></h2><br>
                  <h6 class="card-text"><b>Jumlah Alumni yang tidak berstatus sejumlah : {{$hasilPengurangan}} orang</b></h6>
                </div>
            </div>
          </div>
    </div> 

@endsection
@extends('layout.layouts')
@section('content')
<div class="container mt-5 align-item-center" style="background-repeat: no-repeat; background-size: cover; background-position: center;">
  <div class="header">
        <div class="col-md-2">
          <h1 style="color: #fff;"><b>Berita</b></h1>
        </div>

        <div class="col-md-5">
          <a href="{{url('berita-alumni/tambah')}}" class="btn btn-primary">Tambah Berita</a>
        </div>
  </div>

  <!-- <div class="d-flex">
    @foreach ($tberita as $item)
    <div class="card" style="width: 18rem; margin-right: 10px;">
      @if($item->file)
      <img src="{{ url('foto') . '/' . $item->file }}" class="card-img-top" alt="...">
      @endif
      <div class="card-body">
        <h5 class="card-title">{{$item->judul_berita}}</h5>
        <p class="card-text">{{$item->ket_berita}}</p>
        <p class="card-text">{{$item->kode_berita}}</p>
        <p class="card-text">{{$item->tgl_post}}</p>
        <a href="{{url('berita-alumni/cetak_pdf')}}" class="btn btn-primary">cetak</a>
      </div>
    </div>
    @endforeach
  </div> -->

  <div class="row row-cols-1 row-cols-md-3 g-4" style="margin-top: 1rem;">
  @foreach ($tberita as $item)
    <div class="col">
      <div class="card">
      @if($item->file)
        <img src="{{ url('foto') . '/' . $item->file }}" class="card-img-top" alt="...">
      @endif 
        <div class="card-body">
        <h5 class="card-title">{{$item->judul_berita}}</h5>
        <p class="card-text">{{$item->ket_berita}}</p>
        <p class="card-text">{{$item->kode_berita}}</p>
        <p class="card-text">{{$item->tgl_post}}</p>
        <a href="{{url('berita-alumni/cetak_pdf')}}" class="btn btn-primary">cetak</a> </div>
      </div>
    </div>
    @endforeach
  </div>
</div>
@endsection
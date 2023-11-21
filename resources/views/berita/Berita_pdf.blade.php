<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="container mt-5 align-item-center" style="background-repeat: no-repeat; background-size: cover; background-position: center;">
        <div class="header">
            <h1 style="color: #fff;"><b>Berita</b></h1>
        </div>
        
        <div class="d-flex">

          @foreach ($tberita as $item)
            <div class="card" style="width: 18rem; margin-right: 10px;">
              {{-- @if($item->file)
                <img src="{{ url('foto') . '/' . $item->file }}" class="card-img-top" alt="...">              
              @endif --}}
              <div class="card-body">
                <h5 class="card-title">{{$item->judul_berita}}</h5>
                <p class="card-text">{{$item->ket_berita}}</p>
                <p class="card-text">{{$item->kode_berita}}</p>
                <p class="card-text">{{$item->tgl_post}}</p>
                <a href="#" class="btn btn-primary">cetak</a>
              </div>
            </div>    
          @endforeach   
    </div>

</body>
</html>
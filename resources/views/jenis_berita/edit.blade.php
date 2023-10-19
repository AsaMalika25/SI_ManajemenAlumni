@extends('layout.layouts')
@section('content')  
    <!-- konten utama -->
    <!-- div one page -->

          <!-- form tambah -->
          <div class="container" style="margin-top: 3rem;">
            <!-- text judul   -->
            <!-- form tambah -->
        <form action="simpan" method="post">
          <div class="text-center">
            <h1 class="h4 text-gray-900 font-nav" style="color: white"><b>Form Edit</b></h1>
            <br>
          </div>
          <!-- end text judul -->
            <div class="row">
            <label>Jenis Surat</label>
            <input type="hidden" class="form-control" name="id_jenis_berita"  value="{{$jenis_berita->id_jenis_berita}}"/>
            <input type="text" class="form-control" name="jenis_berita" value="{{$jenis_berita->jenis_berita}}"/>
               

            </div>
                <div class="col"> 
                    <button type="submit" class="btn btn-primary" style="font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif; margin-top: 1rem;">Simpan</button>
                  </div>
              </div>
              @csrf
        </form>  
    </div>
          <!-- end form tambah -->
        </div>
      </div>
        <!-- end konten utama -->
      </div> 
      <!-- end one page -->  
@endsection
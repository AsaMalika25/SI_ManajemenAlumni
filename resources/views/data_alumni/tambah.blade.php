@extends('layout.layouts')
@section('content')
<!-- konten utama -->
<!-- div one page -->

<!-- form tambah -->
<div class="container" style="margin-top: 3rem;">
    <!-- text judul   -->
    <!-- form tambah -->
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
    <form action="simpan" method="post" enctype="multipart/form-data">
        @csrf
        <!-- end text judul -->
        <div class="row">
            <div class="col">
                <label style="color: #fff;">Nama lengkap</label>
                <input type="text" class="form-control" placeholder="" aria-label="First name" name="nama">
            </div>
            <div class="col">
                <label style="color: #fff;">Email</label>
                <input type="text" class="form-control" aria-label="First name" name="email">
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label style="color: #fff;">Tanggal Lahir</label>
                <input type="date" class="form-control" name="tgl_lahir">
            </div>
            <div class="col">
                <label style="color: #fff;">Sosial Media</label>
                <input type="text" class="form-control" aria-label="First name" name="sosmed">
            </div>

        </div>
        <div class="row">

            <div class="col">
                <label style="color: #fff;">Angkatan</label>
                <select name="id_angkatan" class="form-control">
                    @foreach($angkatan as $ang)
                        <option value="{{ $ang->id_angkatan }}">{{ $ang->no_angkatan }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="col">
                <label style="color: #fff;">ALAMAT</label>
                <input type="text" class="form-control" aria-label="First name" name="alamat">
            </div>

        </div>
        <div class="row">

            <div class="col">
                <label style="color: #fff;">User</label>
                <select name="id_akun" class="form-control">
                    @foreach($akun as $ak)
                        <option value="{{ $ak->id_akun }}">{{ $ak->username }}</option>
                    @endforeach
                </select>
            </div>

            <div class="col">
                <label style="color: #fff;">Nomor Telp</label>
                <input type="text" class="form-control" aria-label="First name" name="no_telp">
            </div>
        </div>

        <div class="row">
            <div class="col">
                <label style="color: #fff;">Jenis Kelamin</label>
                <select name="jenkel" id="" class="form-control">
                    <option value="Laki-laki" name="jenkel">Laki-laki</option>
                    <option value="Perempuan" name="jenkel">Perempuan</option>
                </select>
            </div>
            <div class="col">
                <label style="color: #fff;">Kelas</label>
                <select name="id_kelas" class="form-control">
                    @foreach($kelas as $kel)
                        <option value="{{ $kel->id_kelas }}">{{ $kel->nama_kelas }}
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="row">

                <div class="col">
                    <label style="color: #fff;">Upload Ijazah</label>
                    <input type="file" class="form-control" aria-label="First name" name="ijazah">
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <button type="submit" class="btn btn-primary"
                        style="font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif; margin-top: 1rem;">Submit</button>
                </div>
            </div>

    </form>
</div>
<!-- end form tambah -->
</div>
</div>
<!-- end konten utama -->
</div>
<!-- end one page -->
@endsection

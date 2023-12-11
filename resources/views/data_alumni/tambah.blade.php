@extends('layout.layouts')
@section('content')
<style>
    .input-with-icon {
        background-image: url('/img/user.png');
        background-size: 20px 20px;
        background-position: 10px center;
        background-repeat: no-repeat;
        padding-left: 40px;
    }

    .surat {
        background-image: url('/img/surat.png');
        background-size: 20px 20px;
        background-position: 10px center;
        background-repeat: no-repeat;
        padding-left: 40px;
    }

    .sosial {
        background-image: url('/img/bumi.png');
        background-size: 20px 20px;
        background-position: 10px center;
        background-repeat: no-repeat;
        padding-left: 40px;
    }

    .user {
        background-image: url('/img/user2.png');
        background-size: 20px 20px;
        background-position: 10px center;
        background-repeat: no-repeat;
        padding-left: 40px;
    }

    .telp {
        background-image: url('/img/telepon.png');
        background-size: 20px 20px;
        background-position: 10px center;
        background-repeat: no-repeat;
        padding-left: 40px;
    }
</style>
<!-- form tambah -->
<div class="container" style="margin-top: 3rem;">
    <div>
        <h2 style="color: #fff; font-size:50px; text-align:center;"><b>Tambah Data Alumni</b></h2>
    </div>
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
                <label style="color: #fff;">Nama Lengkap</label>
                <input type="text" class="form-control input-with-icon" placeholder="" aria-label="First name" name="nama">
            </div>
            <div class="col">
                <label style="color: #fff;">Email</label>
                <input type="text" class="form-control surat" aria-label="First name" name="email">
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label style="color: #fff;">Tanggal Lahir</label>
                <input type="date" class="form-control" name="tgl_lahir">
            </div>
            <div class="col">
                <label style="color: #fff;">Sosial Media</label>
                <input type="text" class="form-control sosial" aria-label="First name" name="sosmed">
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label style="color: #fff;">Angkatan</label>
                <select name="id_angkatan" class="form-control user">
                    <option selected hidden> Pilih Angkatan</option>
                    @foreach($angkatan as $ang)
                    <option value="{{ $ang->id_angkatan }}">{{ $ang->no_angkatan }}
                    </option>
                    @endforeach
                </select>
            </div>
            <div class="col">
                <label style="color: #fff;">Alamat</label>
                <textarea name="alamat" id="" class="form-control" style="height: 18px;"></textarea>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label style="color: #fff;">User</label>
                <select name="id_akun" class="form-control input-with-icon">
                    <option selected hidden> Pilih User</option>
                    @foreach($akun as $ak)
                    <option value="{{ $ak->id_akun }}">{{ $ak->username }}</option>
                    @endforeach
                </select>
            </div>
            <div class="col">
                <label style="color: #fff;">Nomor Telp</label>
                <input type="text" class="form-control telp" aria-label="First name" name="no_telp">
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label style="color: #fff;">Jenis Kelamin</label>
                <select name="jenkel" id="" class="form-control user">
                    <option value="Laki-laki" name="jenkel">Laki-laki</option>
                    <option value="Perempuan" name="jenkel">Perempuan</option>
                </select>
            </div>
            <div class="col">
                <label style="color: #fff;">Kelas</label>
                <select name="id_kelas" class="form-control sosial">
                    @foreach($kelas as $kel)
                    <option value="{{ $kel->id_kelas }}">{{ $kel->nama_kelas }}
                    </option>
                    @endforeach
                </select>
            </div>
            <div class="row" style="padding-right: 0px;">
                <div class="col" style="padding-right: 0px;">
                    <label style="color: #fff;">Upload Ijazah</label>
                    <input type="file" class="form-control" aria-label="First name" name="ijazah">
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <a href="/alumni" class="btn btn-warning" style="font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;  margin-top: 1rem;">Kembali</a>
                    <button type="submit" class="btn btn-primary" style="font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif; margin-top: 1rem;">Submit</button>
                </div>
            </div>
    </form>
</div>
@endsection
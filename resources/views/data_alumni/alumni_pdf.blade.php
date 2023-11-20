<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Document</title>
    
</head>
<style>

    body{
        font-family: sans-serif;
    }

    .table, th, tr, td{
        border: 1px #000 solid;
    }
</style>
<body>
    <div class="container mt-5 align-item-center"
    style="background-repeat: no-repeat; background-size: cover; background-position: center;">
    <h1 class="d-flex justify-content-center" style="color: #fff; font-family: poppins;"><b>LIST DATA ALUMNI</b></h1>
    <br>
    <div class="tab-content" id="pills-tabContent">
        <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
            <div class="card"
                style="width: 123.02284710017575vh; margin:auto; border-radius: 2.862254025044723vh; margin-bottom: 14.311270125223613vh;">
                <div class="card-body">

                    <!-- tabel -->
                    <table class="table Datatable table-responsive table-bordered">
                        <!-- head tabel -->
                        <thead>
                            <tr>
                                <th class="font-table" scope="col">No</th>
                                <th class="font-table" scope="col">Nama</th>
                                <th class="font-table" scope="col">Angkatan</th>
                                <th class="font-table" scope="col">SosMed</th>
                                <th class="font-table" scope="col">kelas</th>
                                <th class="font-table" scope="col">Ijazah</th>
                                <th class="font-table" scope="col" colspan="2">Aksi</th>
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
</body>
</html>



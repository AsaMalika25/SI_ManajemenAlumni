@extends('layout.layouts')
@section('title', 'Daftar Alumni')
@section('content')

<div class="content m-5">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <span class="h1">
                        Log Activity
                    </span>
                </div>
                <div class="card-body">
                    <form action="log/hapus" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-12">
                                <button class="btn btn-warning" type="button" id="checkAll">Select Semua</button>
                                <button class="btn btn-danger" type="submit">Hapus</button>
                                <table class="table table-hover table-bordered DataTable mt-2">
                                    <thead>
                                        <tr>
                                            <th>Data Alumni</th>
                                            <th>Hapus</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($log as $tx)
                                            <tr>
                                                <td>{{ $tx->logs }}</td>
                                                <td>
                                                    <input type="checkbox" class="checkbox" name="id_log[]"
                                                        value="{{ $tx->id_log }}">
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                    </form>
                </div>
                <div class="card-footer">

                </div>
            </div>
        </div>
    </div>
</div>
    <script>
        document.getElementById('checkAll').addEventListener('click', function() {
        var checkbox = document.querySelectorAll('.checkbox');
        for (var i = 0; i < checkbox.length; i++) {
        checkbox[i].checked = !checkbox[i].checked;
        }
        })
    </script>
@endsection
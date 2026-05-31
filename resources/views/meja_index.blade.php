@extends('template')

@section('title', 'Data Meja')

@section('konten')
    <center>
        <br />
        <h3>Data Meja</h3>
        <br />
        <table class="table table-striped table-hover">
            <tr>
                <th>Merk Meja</th>
                <th>Stock Meja</th>
                <th>Tersedia</th>
                <th>Opsi</th>
            </tr>
            @foreach ($meja as $m)
                <tr>
                    <td>{{ $m->merkmeja }}</td>
                    <td>{{ $m->stockmeja }}</td>
                    <td>{{ $m->tersedia }}</td>
                    <td>
                        <a href="/meja/edit/{{ $m->kodemeja }}" class="btn btn-warning">Edit</a>
                        <a href="/meja/hapus/{{ $m->kodemeja }}" class="btn btn-danger">Hapus</a>
                    </td>
                </tr>
            @endforeach
        </table>
        <ul class="pagination" style="margin:20px 0">
            {{ $meja->links() }}
        </ul>
        <a href="/meja/tambah" class="btn btn-primary">Tambah Meja Baru</a>
    </center>
@endsection
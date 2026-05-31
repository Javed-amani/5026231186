@extends('template')

@section('title', 'Tambah Meja')

@section('konten')
    <br />
    <h3>Tambah Meja</h3>
    <br />
    <form action="/meja/store" method="POST">
        @csrf
        <div class="form-group">
            <label>Merk Meja</label>
            <input type="text" name="merkmeja" required class="form-control" maxlength="30">
        </div>
        <div class="form-group">
            <label>Stock Meja</label>
            <input type="number" name="stockmeja" required class="form-control">
        </div>
        <div class="form-group">
            <label>Tersedia (Y/N)</label>
            <input type="text" name="tersedia" required class="form-control" maxlength="1">
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="/meja" class="btn btn-secondary">Kembali</a>
    </form>
@endsection
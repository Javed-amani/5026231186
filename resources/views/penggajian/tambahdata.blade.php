<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tambah Pembelian</title>
    <style>
        body { font-family: Arial, sans-serif; padding: 20px; }
        input[type=text], input[type=number] { width: 100%; padding: 8px; margin: 6px 0 14px; box-sizing: border-box; border: 1px solid #ccc; border-radius: 4px; }
        label { font-weight: bold; }
        .btn-simpan { background: #f005fd; color: white; padding: 8px 20px; border: none; border-radius: 4px; cursor: pointer; font-size: 14px; }
        .btn-back { background: #9E9E9E; color: white; padding: 8px 20px; border: none; border-radius: 4px; cursor: pointer; font-size: 14px; text-decoration: none; }
    </style>
</head>

<div class="jumbotron">
  <h1 class="display-4">Kode Soal Penggajian</h1>
</div>

<body>
    <h2>Form Tambah Data Penggajian</h2>
    <form action="{{ route('penggajian.store') }}" method="POST">
        @csrf
        <label>NIP</label>
        <input type="text" name="NIP" placeholder="Masukkan NIP" required>
        <label>Gaji Pokok</label>
        <input type="number" name="GajiPokok" placeholder="Masukkan Gaji Pokok" required>

        <label>Potongan</label>
        <input type="number" name="Potongan" placeholder="Masukkan Potongan" required>

        <button type="submit" class="btn-simpan">Simpan</button>
        <a href="{{ route('penggajian.index') }}" class="btn-back">Kembali</a>
    </form>
</body>
</html>

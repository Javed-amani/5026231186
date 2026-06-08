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
<body>
    <h2>Form Pembelian Barang</h2>
    <form action="{{ route('keranjang.store') }}" method="POST">
        @csrf
        <label>Kode Barang</label>
        <input type="text" name="KodeBarang" placeholder="Masukkan Kode Barang" required>

        <label>Jumlah</label>
        <input type="text" name="Jumlah" placeholder="Masukkan Jumlah" required>

        <label>Harga per Item</label>
        <input type="text" name="Harga" placeholder="Masukkan Harga" required>

        <button type="submit" class="btn-simpan">Simpan</button>
        <a href="{{ route('keranjang.index') }}" class="btn-back">Kembali</a>
    </form>
</body>
</html>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Keranjang Belanja</title>
    <style>
        body { font-family: Arial, sans-serif; padding: 20px; }
        table { width: 100%; border-collapse: collapse; }
        th, td { border: 1px solid #ccc; padding: 8px 12px; text-align: center; }
        th { background-color: #ffc800; color: white; }
        tr:nth-child(even) { background-color: #f2f2f2; }
        .btn-beli { background: #2196F3; color: white; padding: 5px 12px; border: none; border-radius: 4px; cursor: pointer; text-decoration: none; }
        .btn-batal { background: #f44336; color: white; padding: 5px 12px; border: none; border-radius: 4px; cursor: pointer; }
    </style>
</head>
<body>
    <h2>Daftar Keranjang Belanja</h2>
    <a href="{{ route('keranjang.create') }}" class="btn-beli">+ Beli</a>
    <br><br>
    <table>
        <thead>
            <tr>
                <th>Kode Pembelian</th>
                <th>Kode Barang</th>
                <th>Jumlah Pembelian</th>
                <th>Harga per Item</th>
                <th>Total (Jumlah x Harga)</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $item)
            <tr>
                <td>{{ $item->ID }}</td>
                <td>{{ $item->KodeBarang }}</td>
                <td>{{ $item->Jumlah }}</td>
                <td>Rp {{ number_format($item->Harga, 0, ',', '.') }}</td>
                <td>Rp {{ number_format($item->Jumlah * $item->Harga, 0, ',', '.') }}</td>
                <td>
                    <form action="{{ route('keranjang.destroy', $item->ID) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn-batal" onclick="return confirm('Batalkan item ini?')">Batal</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>

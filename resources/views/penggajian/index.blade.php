<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Penggajian - 5026231186</title>
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

<div class="jumbotron">
  <h1 class="display-4">Kode Soal Penggajian</h1>
</div>

<body>
    <h2>Daftar Hitungan Gaji</h2>
    <a href="{{ route('penggajian.create') }}" class="btn-beli">+ Tambah Data</a>
    <br><br>
    <table>
        <thead>
            <tr>
                <th>NIP</th>
                <th>Gaji Pokok</th>
                <th>Potongan</th>
                <th>Gaji Bersih</th>
                <th>Persentase Potongan</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $item)
            <tr>
                <td>{{ $item->ID }}</td>
                <td>{{ $item->GajiPokok }}</td>
                <td>{{ $item->Potongan }}</td>
                <td>{{ $item->GajiBersih }}</td>
                <td>{{ $item->PersentasePotongan }}</td>
                <td>
                    <form action="{{ route('penggajian.destroy', $item->ID) }}" method="POST" style="display:inline;">
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

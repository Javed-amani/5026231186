<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Keranjangbelanja;

class KeranjangController extends Controller
{
    // Halaman Index
    public function index()
    {
        $data = Keranjangbelanja::all();
        return view('keranjang.index', compact('data'));
    }

    // Halaman Tambah Data
    public function create()
    {
        return view('keranjang.create');
    }

    // Simpan Data Baru
    public function store(Request $request)
    {
        Keranjangbelanja::create([
            'KodeBarang' => $request->KodeBarang,
            'Jumlah'     => $request->Jumlah,
            'Harga'      => $request->Harga,
        ]);

        return redirect()->route('keranjang.index');
    }

    // Hapus Data
    public function destroy($id)
    {
        Keranjangbelanja::where('ID', $id)->delete();
        return redirect()->route('keranjang.index');
    }
}

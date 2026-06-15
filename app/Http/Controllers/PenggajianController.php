<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class PenggajianController extends Controller
{
    public function index()
    {
        $penggajian = DB::table('Penggajian')->paginate(10);
        return view('penggajian_index', ['penggajian' => $penggajian]);
    }

    public function tambah()
    {
        return view('penggajian_tambah');
    }

    public function store(Request $request)
    {
        DB::table('Penggajian')->insert([
            'merkmeja' => $request->merkmeja,
            'stockmeja' => $request->stockmeja,
            'tersedia' => $request->tersedia
        ]);
        return redirect('/penggajian');
    }

    public function edit($id)
    {
        $penggajian = DB::table('Penggajian')->where('ID', $id)->get();
        return view('penggajian_edit', ['penggajian' => $penggajian]);
    }

    public function update(Request $request)
    {
        DB::table('Penggajian')->where('ID', $request->id)->update([
            'merkmeja' => $request->merkmeja,
            'stockmeja' => $request->stockmeja,
            'tersedia' => $request->tersedia
        ]);
        return redirect('/penggajian');
    }

    public function hapus($id)
    {
        DB::table('Penggajian')->where('ID', $id)->delete();
        return redirect('/penggajian');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MejaController extends Controller
{
    public function index()
    {
        $meja = DB::table('meja')->paginate(10);
        return view('meja_index', ['meja' => $meja]);
    }

    public function tambah()
    {
        return view('meja_tambah');
    }

    public function store(Request $request)
    {
        DB::table('meja')->insert([
            'merkmeja' => $request->merkmeja,
            'stockmeja' => $request->stockmeja,
            'tersedia' => $request->tersedia
        ]);
        return redirect('/meja');
    }

    public function edit($id)
    {
        $meja = DB::table('meja')->where('kodemeja', $id)->get();
        return view('meja_edit', ['meja' => $meja]);
    }

    public function update(Request $request)
    {
        DB::table('meja')->where('kodemeja', $request->id)->update([
            'merkmeja' => $request->merkmeja,
            'stockmeja' => $request->stockmeja,
            'tersedia' => $request->tersedia
        ]);
        return redirect('/meja');
    }

    public function hapus($id)
    {
        DB::table('meja')->where('kodemeja', $id)->delete();
        return redirect('/meja');
    }
}
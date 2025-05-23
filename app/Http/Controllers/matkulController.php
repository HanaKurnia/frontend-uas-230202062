<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class matkulController extends Controller
{
    public function index()
    {
        $matkul = DB::table('matkul')->get();
        return view('matkul.index', compact('matkul'));
    }

    public function create()
    {
        return view('matkul.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'kode_matkul' => 'required|unique:matkul,kode_matkul|max:10',
            'nama_matkul' => 'required|max:100',
            'sks' => 'required|max:100',
            'semester' => 'required|max:100',
        ]);

        DB::table('matkul')->insert([
            'kode_matkul' => $request->kode_matkul,
            'nama_matkul' => $request->nama_matkul,
            'sks' => $request->sks,
            'semester' => $request->semester,
        ]);

        return redirect()->route('matkul.index')->with('success', 'Data matkul berhasil ditambahkan.');
    }

    public function edit($kode_matkul)
    {
        $matkul = DB::table('matkul')->where('kode_matkul', $kode_matkul)->first();
        if (!$matkul) {
            abort(404);
        }

        return view('matkul.edit', compact('matkul'));
    }

    public function update(Request $request, $kode_matkul)
    {
        $request->validate([
            'nama_matkul' => 'required|max:100',
        ]);

        DB::table('matkul')->where('kode_matkul', $kode_matkul)->update([
            'nama_matkul' => $request->nama_matkul,
        ]);

        return redirect()->route('matkul.index')->with('success', 'Data matkul berhasil diupdate.');
    }

    public function destroy($kode_matkul)
    {
        DB::table('matkul')->where('kode_matkul', $kode_matkul)->delete();
        return redirect()->route('matkul.index')->with('success', 'Data matkul berhasil dihapus.');
    }
}
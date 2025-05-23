<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class mahasiswaController extends Controller
{
    public function index()
    {
        $mahasiswa = DB::table('mahasiswa')->get();
        return view('mahasiswa.index', compact('mahasiswa'));
    }

    public function create()
    {
        return view('mahasiswa.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'npm' => 'required|unique:mahasiswa,npm|max:10',
            'nama_mahasiswa' => 'required|max:100',
            'id_kelas' => 'required|max:100',
            'kode_prodi' => 'required|max:100',
        ]);

        DB::table('mahasiswa')->insert([
            'npm' => $request->npm,
            'nama_mahasiswa' => $request->nama_mahasiswa,
            'id_kelas' => $request->id_kelas,
            'kode_prodi' => $request->kode_prodi,
        ]);

        return redirect()->route('mahasiswa.index')->with('success', 'Data mahasiswa berhasil ditambahkan.');
    }

    public function edit($npm)
    {
        $mahasiswa = DB::table('mahasiswa')->where('npm', $npm)->first();
        if (!$mahasiswa) {
            abort(404);
        }

        return view('mahasiswa.edit', compact('mahasiswa'));
    }

    public function update(Request $request, $npm)
    {
        $request->validate([
            'nama_mahasiswa' => 'required|max:100',
        ]);

        DB::table('mahasiswa')->where('npm', $npm)->update([
            'nama_mahasiswa' => $request->nama_mahasiswa,
        ]);

        return redirect()->route('mahasiswa.index')->with('success', 'Data mahasiswa berhasil diupdate.');
    }

    public function destroy($npm)
    {
        DB::table('mahasiswa')->where('npm', $npm)->delete();
        return redirect()->route('mahasiswa.index')->with('success', 'Data mahasiswa berhasil dihapus.');
    }
}
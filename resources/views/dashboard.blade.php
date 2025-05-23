@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')

    <div class="tab-content" id="dashboardTabsContent">
        <div class="tab-pane fade show active" id="matkul" role="tabpanel">
            <!-- Tabel matkul -->
            <a href="{{ route('matkul.create') }}" class="btn btn-primary my-3">Tambah Matkul</a>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Kode Matkul</th>
                        <th>Nama Matkul</th>
                        <th>SKS</th>
                        <th>Semester</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($matkul as $item)
                        <tr>
                            <td>{{ $item->kode_matkul }}</td>
                            <td>{{ $item->nama_matkul }}</td>
                            <td>{{ $item->sks }}</td>
                            <td>{{ $item->semester }}</td>
                            <td>
                                <a href="{{ route('matkul.edit', $item->kode_matkul) }}" class="btn btn-warning btn-sm">Edit</a>
                                <form action="{{ route('matkul.destroy', $item->kode_matkul) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus?')">Hapus</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    @if ($matkul->isEmpty())
                    <tr>
                     <td colspan="4" class="text-center">Data mata kuliah belum tersedia.</td>
                    </tr>
                    @endif
                </tbody>
            </table>
        </div>
        <div class="tab-pane fade" id="mahasiswa" role="tabpanel">
            <!-- Tabel Mahasiswa -->
            <a href="{{ route('mahasiswa.create') }}" class="btn btn-primary my-3">Tambah Mahasiswa</a>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>NPM</th>
                        <th>Nama Mahasiswa</th>
                        <th>Nama Kelas</th>
                        <th>Nama Prodi</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($mahasiswa as $datamhs)
                        <tr>
                            <td>{{ $datamhs->npm }}</td>
                            <td>{{ $datamhs->nama_mahasiswa }}</td>
                            <td>{{ $datamhs->id_kelas }}</td>
                            <td>{{ $datamhs->kode_prodi }}</td>
                            <td>
                                <a href="{{ route('mahasiswa.edit', $datamhs->npm) }}" class="btn btn-warning btn-sm">Edit</a>
                                <form action="{{ route('mahasiswa.destroy', $datamhs->npm) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus?')">Hapus</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    @if ($mahasiswa->isEmpty())
                        <tr>
                            <td colspan="3" class="text-center">Data mahasiswa belum tersedia.</td>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>
    </div>
@stop
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Daftar Mahasiswa</title>
    <!-- Bootstrap 5 CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
    <h1 class="mb-4">Daftar Mahasiswa</h1>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <div class="mb-3">
        <a href="{{ url('/mahasiswa/tambahMahasiswa') }}" class="btn btn-primary">Tambah Mahasiswa</a>
    </div>

    <div class="table-responsive">
        <table class="table table-bordered table-striped align-middle">
            <thead class="table-dark">
                <tr>
                    <th>NPM</th>
                    <th>Nama mahasiswa</th>
                    <th>Nama Kelas</th>
                    <th>Nama Prodi</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($mahasiswa as $mahasiswa)
                    <tr>
                        <td>{{ $mahasiswa->npm }}</td>
                        <td>{{ $mahasiswa->nama_mahasiswa }}</td>
                        <td>{{ $mahasiswa->id_kelas }}</td>
                        <td>{{ $mahasiswa->kode_prodi }}</td>
                        <td>
                            <a href="{{ url('/mahasiswa/'.$mahasiswa->npm.'/edit') }}" class="btn btn-sm btn-warning">Edit</a>

                            <form action="{{ url('/mahasiswa/'.$mahasiswa->npm) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" onclick="return confirm('Yakin ingin hapus?')" class="btn btn-sm btn-danger">
                                    Hapus
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach

                @if ($mahasiswa->isEmpty())
                    <tr>
                        <td colspan="3" class="text-center">Data program studi belum tersedia.</td>
                    </tr>
                @endif
            </tbody>
        </table>
    </div>
</div>

<!-- Bootstrap JS (opsional, untuk interaktivitas) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
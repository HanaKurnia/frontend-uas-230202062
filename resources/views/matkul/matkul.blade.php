<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Daftar Matkul</title>
    <!-- Bootstrap 5 CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
    <h1 class="mb-4">Daftar Mata Kuliah</h1>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <div class="mb-3">
        <a href="{{ url('/matkul/tambahMatkul') }}" class="btn btn-primary">Tambah Matkul</a>
    </div>

    <div class="table-responsive">
        <table class="table table-bordered table-striped align-middle">
            <thead class="table-dark">
                <tr>
                    <th>Kode Matkul</th>
                    <th>Nama Matkul</th>
                    <th>SKS</th>
                    <th>Semester</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($matkul as $matkul)
                    <tr>
                        <td>{{ $matkul->kode_matkul }}</td>
                        <td>{{ $matkul->nama_matkul }}</td>
                        <td>{{ $matkul->sks }}</td>
                        <td>{{ $matkul->semester }}</td>
                        <td>
                            <a href="{{ url('/matkul/'.$matkul->kode_matkul.'/edit') }}" class="btn btn-sm btn-warning">Edit</a>

                            <form action="{{ url('/matkul/'.$matkul->kode_matkul) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" onclick="return confirm('Yakin ingin hapus?')" class="btn btn-sm btn-danger">
                                    Hapus
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach

                @if ($matkul->isEmpty())
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
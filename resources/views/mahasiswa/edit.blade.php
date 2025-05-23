<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Edit Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
    <h1 class="mb-4">Edit Mahasiswa</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ url('/mahasiswa/' . $mahasiswa->npm) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="npm" class="form-label">NPM</label>
            <input type="text" id="npm" name="npm" class="form-control" value="{{ $mahasiswa->npm }}" readonly>
        </div>

        <div class="mb-3">
            <label for="nama_mahasiswa" class="form-label">Nama Mahasiswa</label>
            <input type="text" id="nama_mahasiswa" name="nama_mahasiswa" class="form-control" value="{{ old('nama_mahasiswa', $mahasiswa->nama_mahasiswa) }}" required>
        </div>

        <div class="mb-3">
            <label for="id_kelas" class="form-label">Nama Kelas</label>
            <input type="text" id="id_kelas" name="id_kelas" class="form-control" value="{{ old('id_kelas', $mahasiswa->id_kelas) }}" required>
        </div>

        <div class="mb-3">
            <label for="kode_prodi" class="form-label">Nama Prodi</label>
            <input type="text" id="kode_prodi" name="kode_prodi" class="form-control" value="{{ old('kode_prodi', $mahasiswa->kode_prodi) }}" required>
        </div>

        <button type="submit" class="btn btn-success">Update</button>
        <a href="{{ route('matkul.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
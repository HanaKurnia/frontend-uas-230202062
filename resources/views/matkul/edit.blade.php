<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Edit Matkul</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
    <h1 class="mb-4">Edit Matkul</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ url('/matkul/' . $matkul->kode_matkul) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="kode_matkul" class="form-label">Kode Matkul</label>
            <input type="text" id="kode_matkul" name="kode_matkul" class="form-control" value="{{ $matkul->kode_matkul }}" readonly>
        </div>

        <div class="mb-3">
            <label for="nama_matkul" class="form-label">Nama Matkul</label>
            <input type="text" id="nama_matkul" name="nama_matkul" class="form-control" value="{{ old('nama_matkul', $matkul->nama_matkul) }}" required>
        </div>

        <div class="mb-3">
            <label for="sks" class="form-label">SKS</label>
            <input type="text" id="sks" name="sks" class="form-control" value="{{ old('sks', $matkul->sks) }}" required>
        </div>

        <div class="mb-3">
            <label for="semester" class="form-label">Semester</label>
            <input type="text" id="semester" name="semester" class="form-control" value="{{ old('semester', $matkul->semester) }}" required>
        </div>

        <button type="submit" class="btn btn-success">Update</button>
        <a href="{{ route('matkul.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
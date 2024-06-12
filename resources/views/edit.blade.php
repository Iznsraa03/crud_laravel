<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Mahasiswa</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container my-4">
        <h1 class="text-center mb-4">Edit Mahasiswa</h1>
        <div class="row justify-content-center">
            <div class="col-md-6">
                <a href="/" class="btn btn-secondary mb-3">Kembali</a>
                <form action="/edit/{{ $mahasiswa->id }}" method="post">
                    @csrf
                    @method('put')
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" name="nama" id="nama" class="form-control" value="{{ $mahasiswa->nama }}" required>
                    </div>
                    <div class="mb-3">
                        <label for="nim" class="form-label">NIM</label>
                        <input type="text" name="nim" id="nim" class="form-control" value="{{ $mahasiswa->nim }}" required>
                    </div>
                    <div class="mb-3">
                        <label for="jurusan" class="form-label">Jurusan</label>
                        <input type="text" name="jurusan" id="jurusan" class="form-control" value="{{ $mahasiswa->jurusan }}" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Kirim</button>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js
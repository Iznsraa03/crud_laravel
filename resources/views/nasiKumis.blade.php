<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Kumis</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <style>
        form {
            max-width: 600px;
            margin: 0 auto;
        }
    </style>
</head>
<body>
    <div class="container my-4">
        <h1 class="text-center mb-4">Tambah Kumis APPS</h1>
        <a href="/" class="btn btn-secondary mb-3">Kembali</a>
        <form action="/tambah" method="post">
            @csrf
            <div class="mb-3">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" placeholder="Masukkan nama" value="{{ old('nama') }}">
                @error('nama')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="nim" class="form-label">NIM</label>
                <input type="text" class="form-control @error('nim') is-invalid @enderror" id="nim" name="nim" placeholder="Masukkan NIM" value="{{ old('nim') }}">
                @error('nim')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="jurusan" class="form-label">Jurusan</label>
                <input type="text" class="form-control @error('jurusan') is-invalid @enderror" id="jurusan" name="jurusan" placeholder="Masukkan jurusan" value="{{ old('jurusan') }}">
                @error('jurusan')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Kirim</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
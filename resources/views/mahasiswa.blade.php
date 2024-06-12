<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }}</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container my-4">
        <h1 class="text-center mb-4">Mahasiswa</h1>
        <div class="d-flex justify-content-end mb-3">
            <a href="/tambah" class="btn btn-primary">Tambah</a>
        </div>
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>NIM</th>
                    <th>Jurusan</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($kumis as $data)
                <tr>
                    <td>{{ $data->id }}</td>
                    <td>{{ $data->nama }}</td>
                    <td>{{ $data->nim }}</td>
                    <td>{{ $data->jurusan }}</td>
                    <td>
                        <a href="/edit/{{ $data->id }}" class="btn btn-sm btn-primary">Edit</a>
                        <form style="display:inline" action="/hapus/{{ $data->id }}" method="post" class="d-inline">
                            @csrf
                            @method('delete')
                            <button onclick="return confirm('Mau Hapus Kak?')" type="submit" class="btn btn-sm btn-danger">Hapus</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
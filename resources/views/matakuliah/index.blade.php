<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Daftar Mata Kuliah</title>
</head>
<body>
    <h1>Daftar Mata Kuliah</h1>

    @if (session('success'))
        <p>{{ session('success') }}</p>
    @endif

    <p>
        <a href="{{ route('matakuliah.create') }}">Tambah Mata Kuliah</a>
    </p>

    <table border="1" cellpadding="6" style="border-collapse: collapse;">
        <tr>
            <th>No</th>
            <th>Kode Mata Kuliah</th>
            <th>Nama Mata Kuliah</th>
            <th>SKS</th>
            <th>Aksi</th>
        </tr>

        @forelse ($matakuliahs as $m)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $m->kode_matakuliah }}</td>
                <td>{{ $m->nama_matakuliah }}</td>
                <td>{{ $m->sks }}</td>
                <td>
                    <a href="{{ route('matakuliah.show', $m->id) }}">Detail</a>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="5">Belum ada data.</td>
            </tr>
        @endforelse
    </table>
</body>
</html>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Detail Mata Kuliah</title>
</head>
<body>
    <h1>Detail Mata Kuliah</h1>

    <table border="1" cellpadding="6" style="border-collapse: collapse;">
        <tr>
            <th>Kode Mata Kuliah</th>
            <td>{{ $matakuliah->kode_matakuliah }}</td>
        </tr>
        <tr>
            <th>Nama Mata Kuliah</th>
            <td>{{ $matakuliah->nama_matakuliah }}</td>
        </tr>
        <tr>
            <th>Jumlah SKS</th>
            <td>{{ $matakuliah->sks }}</td>
        </tr>
        <tr>
            <th>Dibuat</th>
            <td>{{ $matakuliah->created_at->format('d-m-Y H:i') }}</td>
        </tr>
        <tr>
            <th>Diperbarui</th>
            <td>{{ $matakuliah->updated_at->format('d-m-Y H:i') }}</td>
        </tr>
    </table>

    <p>
        <a href="{{ route('matakuliah.index') }}">Kembali</a>
    </p>
</body>
</html>

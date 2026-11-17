<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tambah Mata Kuliah</title>
</head>
<body>
    <h1>Tambah Data Mata Kuliah</h1>

    <form action="{{ route('matakuliah.store') }}" method="POST">
        @csrf

        <table cellpadding="4">
            <tr>
                <td>
                    <label for="kode_matakuliah">Kode Mata Kuliah</label>
                </td>
                <td>
                    <input type="text" id="kode_matakuliah"
                        name="kode_matakuliah"
                        value="{{ old('kode_matakuliah') }}">
                    @error('kode_matakuliah')
                        <br>{{ $message }}
                    @enderror
                </td>
            </tr>

            <tr>
                <td>
                    <label for="nama_matakuliah">Nama Mata Kuliah</label>
                </td>
                <td>
                    <input type="text" id="nama_matakuliah"
                        name="nama_matakuliah"
                        value="{{ old('nama_matakuliah') }}">
                    @error('nama_matakuliah')
                        <br>{{ $message }}
                    @enderror
                </td>
            </tr>

            <tr>
                <td>
                    <label for="sks">Jumlah SKS</label>
                </td>
                <td>
                    <input type="number" id="sks" name="sks"
                        value="{{ old('sks') }}">
                    @error('sks')
                        <br>{{ $message }}
                    @enderror
                </td>
            </tr>

            <tr>
                <td></td>
                <td>
                    <button type="submit">Simpan</button>
                    <a href="{{ route('matakuliah.index') }}">Kembali</a>
                </td>
            </tr>
        </table>
    </form>
</body>
</html>

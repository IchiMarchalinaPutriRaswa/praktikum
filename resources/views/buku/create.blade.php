<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tambah Data Buku</title>
</head>
<body>

    <h1>Tambah Data Buku</h1>

    <form action="{{ route('buku.store') }}" method="POST">

        @csrf

        <div>
            <label>Kode Buku</label><br>
            <input type="text"
                   name="kode_buku"
                   value="{{ old('kode_buku') }}"
                   required>

            @error('kode_buku')
                <p style="color:red">{{ $message }}</p>
            @enderror
        </div>

        <br>

        <div>
            <label>Judul Buku</label><br>
            <input type="text"
                   name="judul_buku"
                   value="{{ old('judul_buku') }}"
                   required>

            @error('judul_buku')
                <p style="color:red">{{ $message }}</p>
            @enderror
        </div>

        <br>

        <div>
            <label>Kategori</label><br>

            <select name="kategori" required>

                <option value="">-- Pilih Kategori --</option>

                <option value="Fiksi"
                    {{ old('kategori') == 'Fiksi' ? 'selected' : '' }}>
                    Fiksi
                </option>

                <option value="Non Fiksi"
                    {{ old('kategori') == 'Non Fiksi' ? 'selected' : '' }}>
                    Non Fiksi
                </option>

                <option value="Pendidikan"
                    {{ old('kategori') == 'Pendidikan' ? 'selected' : '' }}>
                    Pendidikan
                </option>

                <option value="Teknologi"
                    {{ old('kategori') == 'Teknologi' ? 'selected' : '' }}>
                    Teknologi
                </option>

                <option value="Sejarah"
                    {{ old('kategori') == 'Sejarah' ? 'selected' : '' }}>
                    Sejarah
                </option>

            </select>

            @error('kategori')
                <p style="color:red">{{ $message }}</p>
            @enderror
        </div>

        <br>

        <button type="submit">Simpan</button>

        <a href="{{ route('buku.index') }}">Kembali</a>

    </form>

</body>
</html>

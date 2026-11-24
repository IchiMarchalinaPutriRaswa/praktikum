<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Data Buku</title>
</head>
<body>

    <h1>Daftar Data Buku</h1>

    @if (session('success'))
        <p style="color:green">
            {{ session('success') }}
        </p>
    @endif

    <a href="{{ route('buku.create') }}">
        Tambah Buku
    </a>

    <br><br>

    <table border="1" cellpadding="8" cellspacing="0">

        <thead>
            <tr>
                <th>No</th>
                <th>Kode Buku</th>
                <th>Judul Buku</th>
                <th>Kategori</th>
                <th>Tanggal Dibuat</th>
            </tr>
        </thead>

        <tbody>

            @if ($bukus->isEmpty())

                <tr>
                    <td colspan="5">
                        Belum ada data buku.
                    </td>
                </tr>

            @else

                @foreach ($bukus as $buku)

                    <tr>
                        <td>{{ $loop->iteration }}</td>

                        <td>{{ $buku->kode_buku }}</td>

                        <td>{{ $buku->judul_buku }}</td>

                        <td>{{ $buku->kategori }}</td>

                        <td>
                            {{ $buku->created_at->format('d-m-Y H:i') }}
                        </td>
                    </tr>

                @endforeach

            @endif

        </tbody>

    </table>

</body>
</html>

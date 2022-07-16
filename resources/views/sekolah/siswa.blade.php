<!DOCTYPE html>
<html lang="id">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
    </head>
    <body>
        <fieldset>
            <legend>Data Siswa</legend>
            <br>
            <table border="1" cellspacing="0">
                <tr>
                    <th>Nomor</th>
                    <th>Nama</th>
                    <th>NIS</th>
                    <th>Jurusan</th>
                    <th>Umur</th>
                    <th>Jenis Kelamin</th>
                    <th>Alamat</th>
                </tr>
                @php $no = 1 @endphp
                @foreach ($siswas as $siswa)
                <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ $siswa->nama }}</td>
                    <td>{{ $siswa->nis }}</td>
                    <td>{{ $siswa->jurusan }}</td>
                    <td>{{ $siswa->umur }}</td>
                    <td>{{ $siswa->jenis_kelamin }}</td>
                    <td>{{ $siswa->alamat }}</td>
                </tr>
                @endforeach
            </table>
        </fieldset>
    </body>
</html>

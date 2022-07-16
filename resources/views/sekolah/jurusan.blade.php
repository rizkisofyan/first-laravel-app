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
            <legend>Data Guru</legend>
            <br>
            <table border="1" cellspacing="0">
                <tr>
                    <th>Nomor</th>
                    <th>Nama Jurusan</th>
                    <th>Slug</th>
                    <th>Kepala Program</th>
                    <th>Jumlah Pengajar</th>
                    <th>Jumlah Murid</th>
                </tr>
                @php $no = 1 @endphp
                @foreach ($jurusans as $jurusan)
                <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ $jurusan->nama_jurusan }}</td>
                    <td>{{ $jurusan->slug }}</td>
                    <td>{{ $jurusan->kepala_program }}</td>
                    <td>{{ $jurusan->jumlah_pengajar }}</td>
                    <td>{{ $jurusan->jumlah_murid }}</td>
                </tr>
                @endforeach
            </table>
        </fieldset>
    </body>
</html>

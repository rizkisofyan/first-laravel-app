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
                    <th>Nama</th>
                    <th>NIK</th>
                    <th>Status Kepegawaian</th>
                    <th>Mata Pelajaran</th>
                    <th>Jenis Kelamin</th>
                    <th>Umur</th>
                </tr>
                @php $no = 1 @endphp
                @foreach ($gurus as $guru)
                <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ $guru->nama }}</td>
                    <td>{{ $guru->nik }}</td>
                    <td>{{ $guru->status_kepegawaian }}</td>
                    <td>{{ $guru->mata_pelajaran }}</td>
                    <td>{{ $guru->jenis_kelamin }}</td>
                    <td>{{ $guru->umur }}</td>
                </tr>
                @endforeach
            </table>
        </fieldset>
    </body>
</html>

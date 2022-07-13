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
            <legend>
                Data dosen
            </legend>
            @foreach ($dosenpengajar as $dosen)
                nama: {{ $dosen['nama'] }} <br>
                mata kuliah: {{ $dosen['mata_kuliah'] }} <br>
                <br>
                mahasiswa:
                <ul>
                    <?php $nilaiBimbingan = 0?>
                    @foreach ($dosen['mahasiswa_bimbingan'] as $mahasiswa)
                        <li>
                            Nama: {{ $mahasiswa['nama'] }} <br>
                            Nilai: {{ $mahasiswa['nilai'] }}
                        </li>
                        <?php $nilaiBimbingan += $mahasiswa['nilai'];?>
                    @endforeach
                </ul>
                nilai bimbingan: {{ $nilaiBimbingan / count($dosen['mahasiswa_bimbingan']) }}
                <hr>
            @endforeach
        </fieldset>
    </body>
</html>

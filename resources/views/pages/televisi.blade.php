<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
  </head>
  <body>
    <fieldset>
        <legend>
            Jadwal Penyiaran
        </legend>
        @foreach ($stasiuntelevisi as $penyiar)
            Stasiun Tv: {{ $penyiar['nama'] }} <br>
            Jadwal Tayang :
            <ul>
                <li>
                    Nama Program: {{ $penyiar['jadwal_tayang']['nama_program'] }} <br>
                    Tanggal Tayang : {{ $penyiar['jadwal_tayang']['tanggal_tayang'] }} <br>
                    Pukul : {{ $penyiar['jadwal_tayang']['jam_tayang'] }}
                </li>
            </ul>
            <hr>
        @endforeach
    </fieldset>

  </body>
</html>

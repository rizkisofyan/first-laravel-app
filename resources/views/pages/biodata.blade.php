<!DOCTYPE html>
<html lang="id">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Biodata</title>
    <style>
      body {
        font-family: Arial, Helvetica, sans-serif;
      }
    </style>
  </head>
  <body>
    <h3>Biodata</h3>
    <table>
      <tr>
        <td>Nama</td>
        <td>:</td>
        <td>{{ $nama }}</td>
      </tr>
      <tr>
        <td>Umur</td>
        <td>:</td>
        <td>{{ $umur }}</td>
      </tr>
      <tr>
        <td>Jenis Kelamin</td>
        <td>:</td>
        <td>{{ $kelamin }}</td>
      </tr>
      <tr>
        <td>Alamat</td>
        <td>:</td>
        <td>{{ $alamat }}</td>
      </tr>
      <tr>
        <td>No Hp</td>
        <td>:</td>
        <td>{{ $nohp }}</td>
      </tr>
    </table>
  </body>
</html>
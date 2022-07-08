<!DOCTYPE html>
<html lang="id">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
  </head>
  <body>
    <h3>Saya Memesan : </h3>
    <table>
      <tr>
        <td>Makanan</td>
        <td>:</td>
        <td>{{ $makanan }}</td>
      </tr>
      <tr>
        <td>Minuman</td>
        <td>:</td>
        <td>{{ $minuman }}</td>
      </tr>
      <tr>
        <td>Harga</td>
        <td>:</td>
        <td>Rp. {{ $harga }}</td>
      </tr>
    </table>
  </body>
</html>
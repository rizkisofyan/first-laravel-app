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
            <legend>Data Post</legend>
            <br>
            <table border="1" cellspacing="0">
                <tr>
                    <th>Nomor</th>
                    <th>ID</th>
                    <th>Judul</th>
                    <th>Konten</th>
                </tr>
                @php $no = 1 @endphp
                @foreach ($posts as $post)
                <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ $post->title }}</td>
                    <td>{{ $post->content }}</td>
                </tr>
                @endforeach
            </table>
        </fieldset>
    </body>
</html>

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
                Data siswa
            </legend>
            @foreach ($siswa as $murid)
                nama: {{ $murid['name'] }} <br>
                umur: {{ $murid['age'] }} <br>
                @if ($murid['age'] >= 17)
                    Status: Anda berhak mendapatkan KTP
                @else
                    Status: Anda belum berhak mendapatkan KTP
                @endif
                <br>
                hobi:
                <ul>
                    @foreach ($murid['hobi'] as $hobi )
                        <li>{{ $hobi }}</li>
                    @endforeach
                </ul>
                <hr>
            @endforeach
        </fieldset>
    </body>
</html>

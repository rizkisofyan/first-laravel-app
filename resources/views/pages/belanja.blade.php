<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
        <style>
            ul {
                margin-top: 0;
            }

            ul li {
                margin-bottom: 5px;
            }
        </style>
    </head>
    <body>
        <fieldset>
            <legend>
                Data Pembelanjaan
            </legend>
            @foreach ($belanja as $pembelanja)
                Nama: {{ $pembelanja['nama'] }} <br>
                Barang dibeli:
                <ul>
                    @php
                        $total = 0;
                    @endphp
                    @foreach ($pembelanja['barang_dibeli'] as $barang)
                        <li>
                            Nama Barang: {{ $barang['nama_barang'] }} <br>
                            Harga: Rp. {{ $barang['harga'] }}
                        </li>
                        @php
                            $total += $barang['harga'];
                        @endphp
                    @endforeach
                </ul>
                Total harga: Rp. {{ $total }} <br>
                @php
                    $cashback;
                    if ($total > 500000) {
                        $cashback = (10 / 100) * $total;
                    } else if($total > 250000) {
                        $cashback = (5 / 100) * $total;
                    } else {
                        $cashback = 0;
                    }
                @endphp
                Cashback: Rp. {{ $cashback }}
                <hr>
            @endforeach
        </fieldset>
    </body>
</html>

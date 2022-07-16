<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sample = [
            [
                'nama' => 'Mohamad Rizki Sofyan',
                'nis' => '02213344556677',
                'jurusan' => 'Rekayasa Perangkat Lunak',
                'umur' => 17,
                'jenis_kelamin' => 'Laki-laki',
                'alamat' => 'Planet Bumi, Galaksi Bima Sakti'
            ],
            [
                'nama' => 'Bambang Wijaya',
                'nis' => '02213344553322',
                'jurusan' => 'Teknik Kendaraan Ringan Otomotif',
                'umur' => 18,
                'jenis_kelamin' => 'Laki-laki',
                'alamat' => 'Planet Bumi, Galaksi Bima Sakti'
            ],
            [
                'nama' => 'Budi Budiman',
                'nis' => '02213344559988',
                'jurusan' => 'Teknik Bisnis Sepeda Motor',
                'umur' => 16,
                'jenis_kelamin' => 'Laki-laki',
                'alamat' => 'Planet Bumi, Galaksi Bima Sakti'
            ]
        ];

        DB::table('siswas')->insert($sample);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JurusanSeeder extends Seeder
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
                'nama_jurusan' => 'Rekayasa Perangkat Lunak',
                'slug' => 'rpl',
                'kepala_program' => 'William Wijaya',
                'jumlah_pengajar' => 6,
                'jumlah_murid' => 124
            ],
            [
                'nama_jurusan' => 'Teknik Bisnis Sepeda Motor',
                'slug' => 'tbsm',
                'kepala_program' => 'Andi Nurdin',
                'jumlah_pengajar' => 8,
                'jumlah_murid' => 132
            ],
            [
                'nama_jurusan' => 'Teknik Kendaraan Ringan Otomotif',
                'slug' => 'tkro',
                'kepala_program' => 'Fadil Nurrohman',
                'jumlah_pengajar' => 7,
                'jumlah_murid' => 120
            ]
        ];
        DB::table('jurusans')->insert($sample);
    }
}

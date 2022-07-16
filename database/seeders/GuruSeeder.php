<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GuruSeeder extends Seeder
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
                'nama' => 'Sri Rahayu',
                'nik' => '304112233445567',
                'status_kepegawaian' => 'PNS',
                'mata_pelajaran' => 'Matematika',
                'jenis_kelamin' => 'Perempuan',
                'umur' => 46
            ],
            [
                'nama' => 'Dedi Cahyadi',
                'nik' => '304112233442267',
                'status_kepegawaian' => 'PNS',
                'mata_pelajaran' => 'Bahasa Inggris',
                'jenis_kelamin' => 'Laki-laki',
                'umur' => 51
            ],
            [
                'nama' => 'Tanto Waryono',
                'nik' => '304112233444467',
                'status_kepegawaian' => 'PNS',
                'mata_pelajaran' => 'Fisika',
                'jenis_kelamin' => 'Laki-laki',
                'umur' => 45
            ]
        ];

        DB::table('gurus')->insert($sample);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostSeeder extends Seeder
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
                'title' => 'Belajar TypeScript 1',
                'content' => 'Lorem Ipsum'
            ],
            [
                'title' => 'Belajar TypeScript 2',
                'content' => 'Lorem Ipsum'
            ],
            [
                'title' => 'Tutorial Instalasi NodeJs',
                'content' => 'Lorem Ipsum'
            ]
        ];

        DB::table('posts')->insert($sample);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LatihanController extends Controller
{
    public function perkenalan()
    {
        $nama = 'Mohamad Rizki Sofyan';
        $alamat = 'Planet Bumi';
        $umur = 'unknown';

        return view('pages.perkenalan', compact(
            'nama',
            'alamat',
            'umur'
        ));
    }

    public function data($nama, $alamat, $umur)
    {
        return view('pages.data', compact(
            'nama',
            'alamat',
            'umur'
        ));
    }

    public function siswa()
    {
        $a = [
            [
                'id' => 1,
                'name' => 'Dadang',
                'age' => 15,
                'hobi' => [
                    'mancing',
                    'futsal',
                    'renang'
                ]
            ],
            [
                'id' => 2,
                'name' => 'Dudung',
                'age' => 18,
                'hobi' => [
                    'baca buku',
                    'bernyanyi'
                ]
            ]
        ];

        return view('pages.siswa', ['siswa' => $a]);
    }

    public function kampus()
    {
        $dosenpengajar = [
            [
                'nama' => 'Yusuf Bachtiar',
                'mata_kuliah' => 'Pemrograman Mobile',
                'mahasiswa_bimbingan' => [
                    [
                        'nama' => 'Muhammad Soleh',
                        'nilai' => 78
                    ],
                    [
                        'nama' => 'Jujun Junaedi',
                        'nilai' => 85
                    ],
                    [
                        'nama' => 'Mamat Alkatiri',
                        'nilai' => 90
                    ]
                ]
            ],
            [
                'nama' => 'Yaris Riyadi',
                'mata_kuliah' => 'Pemrograman Web',
                'mahasiswa_bimbingan' => [
                    [
                        'nama' => 'Alfred McTomminay',
                        'nilai' => 67
                    ],
                    [
                        'nama' => 'Bruno Kasmir',
                        'nilai' => 90
                    ],
                ]
            ]
        ];

        return view('pages.kampus', [
            'dosenpengajar' => $dosenpengajar
        ]);
    }

    public function televisi()
    {
        $stasiuntelevisi = [
            [
                'nama' => 'Net TV',
                'jadwal_tayang' => [
                    'nama_program' => 'Ini Talkshow',
                    'jam_tayang' => '20:00 WIB',
                    'tanggal_tayang' => '12 Juli 2022'
                ]
            ],
            [
                'nama' => 'TVRI',
                'jadwal_tayang' => [
                    'nama_program' => 'Jejak Si Siuk',
                    'jam_tayang' => '16:00 WIB',
                    'tanggal_tayang' => '24 Juli 2022'
                ]
            ],
            [
                'nama' => 'BEINSPROT',
                'jadwal_tayang' => [
                    'nama_program' => 'Udin & Idin',
                    'jam_tayang' => '13:00 WIB',
                    'tanggal_tayang' => '21 Juli 2022'
                ]
            ],
            [
                'nama' => 'Ochannel',
                'jadwal_tayang' => [
                    'nama_program' => 'Si Bolong',
                    'jam_tayang' => '11:00 WIB',
                    'tanggal_tayang' => '11 Juli 2022'
                ]
            ],
            [
                'nama' => 'Indosiar',
                'jadwal_tayang' => [
                    'nama_program' => 'Azab',
                    'jam_tayang' => '15:00 WIB',
                    'tanggal_tayang' => '16 Juli 2022'
                ]
            ]
        ];

        return view('pages.televisi', compact('stasiuntelevisi'));
    }

    public function belanja()
    {
        $belanja = [
            [
                'nama' => 'Alfian',
                'barang_dibeli' => [
                    [
                        'nama_barang' => 'sepatu',
                        'harga' => 250000
                    ],
                    [
                        'nama_barang' => 'baju',
                        'harga' => 100000
                    ],
                    [
                        'nama_barang' => 'celana',
                        'harga' => 150000
                    ],
                    [
                        'nama_barang' => 'kupluk',
                        'harga' => 100000
                    ]
                ]
            ],
            [
                'nama' => 'Dida',
                'barang_dibeli' => [
                    [
                        'nama_barang' => 'topi',
                        'harga' => 100000
                    ],
                    [
                        'nama_barang' => 'baju',
                        'harga' => 75000
                    ],
                    [
                        'nama_barang' => 'celana',
                        'harga' => 125000
                    ]
                ]
            ]
        ];

        return view('pages.belanja', compact('belanja'));
    }
}

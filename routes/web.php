<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Basic route
Route::get('/about', function() {
    return view('about');
});

Route::get('/biodata', function() {
    $nama = 'Mohamad Rizki Sofyan';
    $umur = 'unknown';
    $kelamin = 'Pria';
    $alamat = 'Planet Bumi Galaksi Bima Sakti';
    $nohp = '0812345678910';
    
    return view('pages/biodata', compact(
        'nama',
        'umur',
        'kelamin',
        'alamat',
        'nohp'
    ));
});

// Route w/ param(s)
Route::get('/user/{name}', function($name) {
    return view('pages.user', compact('name'));
});

Route::get('/order/{makanan}/{minuman}/{harga}', function($makanan, $minuman, $harga) {
    return view('pages.order', compact(
        'makanan',
        'minuman',
        'harga'
    ));
});

// Route w/ optional param(s)
Route::get('/post/{page?}', function ($page = 1) {
    return view('pages.post', compact('page'));
});
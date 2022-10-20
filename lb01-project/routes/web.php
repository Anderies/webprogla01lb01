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

Route::get('/hello', function(){
    return view('hello');
});

Route::get('/profile', function(){
    echo 'Profile Page';
});

Route::get('/wisata/{wisata_name}', function($wisata_name){
    return view('wisata', ['wisata' => $wisata_name]);
});

route::get('/mahasiswa/{nama}', function ($nama) {
    return view('mahasiswa', ['name' => $nama]);
});

route::get('hubungi-kami', function(){
    return "<h1>Hubungi Kami</h1>";
});

Route::get('/buku/{a}', function ($a) {
    return "Buku ke-$a";
});

Route::get('/buku/{b}', function ($b) {
    return "Buku saya ke-$b";
});

Route::get('/buku/{c}', function ($c) {
    return "Buku kita ke-$c";
});

Route::fallback(function () {
    return "Maaf, alamat tidak ditemukan";
});


   

Route::redirect('/contact-us', '/hubungi-kami');

// Route::get('/buku/1', function () {
//     return "Buku ke-1";
// });

// Route::get('/buku/1', function () {
//     return "Buku saya ke-1";
// });

// Route::get('/buku/1', function () {
//     return "Buku kita ke-1";
// });



// Route::get('/hello', function () {
//     return view('hello');
// });

// Route::get('/contoh', function () {
//     echo 'Selamat Datang di Kelas LB01';
//     echo '<br>';
//     echo 'Hello World';
// });

// Route::get('/students/{nama}', function ($nama) {
//     return "<h1>tampilkan student bernama $nama</h1>";
// });



// Route::get('/hubungi-kami', function () {
//     return '<h1>Hubungi Kami</h1>';
// });

// Route::redirect('/contact-us', '/hubungi-kami', 301);

// Route::fallback(function () {
//     return view('notfound');
// });


// Route::get('/buku/{a}', function ($a) {
//     return "Buku ke-$a";
// });

// Route::get('/buku/{b}', function ($b) {
//     return "Buku saya ke-$b";
// });

// Route::get('/buku/{c}', function ($c) {
//     return "Buku kita ke-$c";
// });
    


// Route::get('/hello', function() {
//     return view('hello');
// });

// Route::get('/mahasiswa/{nama}', function($nama){
//     return view('mahasiswa', ['nama' => $nama]);
// });



Route::get('exhome', function(){
    return view('exhome');
});
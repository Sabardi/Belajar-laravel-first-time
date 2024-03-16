<?php

use Illuminate\Support\Facades\Route;

// Route::get('/hallo', function () {
//     return view('welcome');
// });

// route parameter
route::get('/sabardi/{nama?}/{alamat?}', function($nama = "samsul",$alamat="bagu"){
    return "tampilkan data mahasiswa bernama dan $nama alamaat di $alamat";
});
 
Route::get('/index', function() {
    return view('universitas.mahasiswa');
    // echo '<h2 style="text-align: center"><u>Welcome Sabardi</u></h2>';
});
Route::get('/halo/mahasiswa', function() {
    // return view('halo');
    echo '<h2 style="text-align: center"><u>Welcome Sabardi</u></h2>';
});
Route::get('/halo/mahasiswa/sabardi', function() {
    // return view('halo');
    echo '<h2 style="text-align: center"><u>Welcome Sabardi</u></h2>';
});

// route parameter dengan reguler expression
Route::get('/index/{id}', function($id){
    return "id nya adalah $id";
})->where('id', '[A-Z]{2}[0-9]+');

// route redirect
Route::get(('/hubungi-kami'), function(){
    return "hallo selamat datang";  
});
Route::redirect('/contactus', '/hubungi-kami'); //akan melakukan redirect ke route hubungi kami

//route group
Route::prefix('/admin/')->group(function(){
    Route::get('/mahasiswa', function(){
        echo "<h1>Daftar Mahasiswa</h1>";
    });
    
    Route::get('/dosen', function(){
        echo "<h1>Daftar Dosen</h1>";
    });
    
    Route::get('/karyawan', function(){
        echo "<h1>Daftar Karyawan</h1>";
    });
});

// Route Fallback
Route::fallback(function(){
    return "Maaf, alamat tidak ditemukan";
});

//route priority
Route::get('/buku/{a}', function($a){
    return "buku ke-$a";
});

Route::get('/buku/{b}', function($b){
    return "buku ke-$b";
});

Route::get('/buku/{c}', function($c){
    return "buku ke-$c";
});
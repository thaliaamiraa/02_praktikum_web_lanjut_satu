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

// Route::get('/', function () {
//     return view('welcome');
// });

//Menampilkan pesan 'Selamat Datang'
Route :: get('/', function (){
    echo "Selamat Datang";
});
//Menampilkan pesan 'NIM dan nama'
Route :: get('/about', function (){
    echo "NIM : 2041723005 <br> Nama : Thalia Amira Rifda";
});
//Menampilkan pesan 'Halaman Artikel dengan ID'
Route :: get('/articles/{id}', function ($id){
   return 'Halaman Artikel dengan ID '.$id;
});

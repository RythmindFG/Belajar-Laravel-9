<?php

use App\Http\Controllers\SiswaController;
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

//berfungsi, apabila kita mengakses localhost:8000/ ==> itu akan mengarahkan ke viewnya adalah file view welcome
Route::get('/', function () {
    return view('welcome');
});

// //membuat route baru yaitu localhost:8000/siswa ==> akan mengembalikan info saya siswa
// Route::get('/siswa', function () {
//     return "<h1>Saya adalah seorang Siswa</h1>";
// });


// //membuat route dengan parameter ID ==> localhost:8000/siswa/1,2,3 dan seterusnya
// Route::get('/siswa/{id}', function ($id){
//     return "<h1>Saya siswa dengan ID $id</h1>";
// })
// ->where('id', '[0-9]+');

// //membuat route dengan parameter ID dan Nama ==> localhost:8000/siswa/1/Fahri
// Route::get('/siswa/{id}/{nama}', function ($id, $nama){
//     return "Saya siswa dengan ID <strong>$id</strong> dengan nama <strong>$nama</strong>";
// })
// ->where(['id' => '[0-9]+',
//  'nama' => '[A-Za-z]+']);


//membuat route mengambil dari Controller
Route::get('siswa', [SiswaController::class, 'index']);
Route::get('siswa/{id}', [SiswaController::class, 'detail'])
->where('id', '[0-9]+');
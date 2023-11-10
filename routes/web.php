<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/aa', function () {
    return view('welcome');
});

Route::get('/', function(){
    return view('admin.dashboard');
});
Route::get('/dataPesanan', function(){
    return view('admin.dataPesanan');
});
Route::get('/tambahMenu', function(){
    return view('admin.tambahMenu');
});
Route::get('/tambahAnggota', function(){
    return view('admin.tambahAnggota');
});

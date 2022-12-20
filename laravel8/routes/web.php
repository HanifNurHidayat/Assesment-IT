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

// Route::get('/karyawan',[App\Http\Controllers\Karyawan::class, 'index']);


Route::middleware(['auth'])->group(function () {
 Route::get('/', function () {
     return view('welcome');
});

Route::get('/karyawan','App\Http\Controllers\Karyawan@index')->name('karyawan');
Route::get('/karyawan/create','App\Http\Controllers\Karyawan@create')->name('karyawan.create');
Route::get('/karyawan/edit/{id}','App\Http\Controllers\Karyawan@edit')->name('karyawan.edit');
});

Route::middleware(['guest'])->group(function () {
    Route::get('/login', 'App\Http\Controllers\Login@index')->name('login');
    Route::get('/register', 'App\Http\Controllers\Register@index');
});

Route::post('/karyawan/add','App\Http\Controllers\Karyawan@add')->name('karyawan.add');
Route::post('/karyawan/update','App\Http\Controllers\Karyawan@update')->name('karyawan.update');
Route::delete('/karyawan/delete/{id}','App\Http\Controllers\Karyawan@delete')->name('karyawan.delete');

Route::post('/login','App\Http\Controllers\Login@login');
Route::post('/register','App\Http\Controllers\Register@store');
Route::post('/logout','App\Http\Controllers\Login@logout');
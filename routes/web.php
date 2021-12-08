<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PesanController;
use App\Http\Controllers\AdminController;

//route pada menu utama
Route::get('/', 'PesanController@index')->name('home');
Route::get('/create', 'PesanController@create')->name('buat');
Route::get('/pesanan', 'PesanController@tampil')->name('tampil');
Route::get('/akhir', 'PesanController@akhir')->name('akhir');
Route::post('/simpan', [PesanController::class, 'store']);

//route pada menu admin
Route::get('/adm', 'AdminController@index')->name('admin');
Route::get('/adm/pesanan', 'PesanController@show')->name('show');

//route edit
Route::get('/adm/edit/{id}', 'PesanController@edit')->name('edit');
Route::post('/adm/update/{id}', [PesanController::class, 'update']);

//route delete
Route::delete('adm/delete/{id}', 'PesanController@delete')->name('delete');

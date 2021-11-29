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

Route::get('home', function () {
    return view('home');
});

Route::get('login', function () {
    return view('login');
});

Route::get('register', function () {
    return view('register');
});

Route::post('register/store', 'UserController@store');

Route::get('pembayaran', function () {
    return view('pembayaran');
});

Route::get('materi', 'MateriController@materi');

Route::get('bank_soal', 'BanksoController@bakso');

Route::get('pembahasan', 'PembahasanController@index');

Route::get('/materi/edit/{id}', 'MateriController@edit');
Route::get('/materi/hapus/{id}', 'MateriController@delete');
Route::post('/update', 'MateriController@update');
Route::get('/materi/tambah', 'MateriController@tambah');
Route::post('/materi/tambah/proses', 'MateriController@proses');

Route::get('home/user', function () {
    $pengguna = DB::table('pengguna')->where('id_pengguna', 3)->get();
    return view('homeuser',['pengguna'=>$pengguna]);
});

Route::get('user_bs', 'UserController@baksoal');
Route::get('user_materi', 'UserController@materi');
Route::get('user_pembahasan', 'UserController@pembahasan');
Route::get('user_hasilto', 'UserController@hasilto');
Route::get('user_profile', 'UserController@profile');
Route::get('user_to', 'UserController@to');
Route::get('to_page', 'UserController@topage');
Route::get('manajemen_user', 'UserController@pengguna');

Route::get('manajemen_user/edit/{id}', 'UserController@edit');
Route::get('manajemen_user/hapus/{id}', 'UserController@delete');
Route::post('/ubah', 'UserController@update');
Route::get('user/edit/{id}', 'UserController@editUser');
Route::get('/update/user', 'UserController@storeProfil');
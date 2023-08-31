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

Route::get('/', function () {
    return view('admin.dashboard');
});

Route::get('/create', function () {
    return view('admin.create');
});

Route::get('/index', function () {
    return view('admin.index');
});

Route::get('/perusahaan', function () {
    return view('admin.component.perusahaan');
});


Route::get('/login', function () {
    return view('auth.login');
});

Route::get('/detail', function () {
    return view('admin.component.detail');
});

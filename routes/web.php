<?php

use App\Http\Controllers\CompanyController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\ItemsController;
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

// Route::get('/', function () {
//     return view('dashboard');
// });

// Route::get('/create', function () {
//     return view('user.create');
// });

// Route::get('/index', function () {
//     return view('user.index');
// });

// Route::get('/perusahaan', function () {
//     return view('user.component.perusahaan');
// });





Route::resource('perusahaan', CompanyController::class);
Route::resource('/perusahaan/detail/{id}', ItemController::class);
// Route::resource('detail', ItemController::class);


// // Route::get('perusahaan', [CompanyController::class, 'index'])->name('perusahaan');
// Route::get('perusahaan/detail/{id}', [ItemController::class, 'show'])->name('item.detail');


// Route::get('/login', function () {
//     return view('auth.login');
// });

// Route::get('/detail', function () {
//     return view('company.detail');
// });

// Route::get('/pengguna', function () {
//     return view('user.pengguna');
// });

// Route::get('/peralatan', function () {
//     return view('user.peralatan');
// });

<?php

use App\Http\Controllers\CompanyController;
use App\Http\Controllers\ItemController;
use App\Models\Company;
use App\Models\Item;
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
    return view('dashboard');
});

Route::get('/create', function () {
    return view('user.create');
});

Route::get('/index', function () {
    return view('user.index');
});

// Route::get('/perusahaan', function () {
//     return view('user.component.perusahaan');
// });





Route::resource('perusahaan', CompanyController::class);














Route::get('/login', function () {
    return view('auth.login');
});

Route::get('/detail', function () {
    return view('company.detail');
});

Route::get('/pengguna', function () {
    return view('user.pengguna');
});

Route::get('/peralatan', function () {
    return view('user.peralatan');
});

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FileController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\ItemsController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\DashboardController;
use App\Models\Company;

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

//auth route

Route::post('/logout',[LoginController::class,'logout']);
Route::get('/logout',[LoginController::class,'logout']);

Route::get('/login', function () {
    return view('auth.login');
})->middleware('guest');
Route::post('/login',[LoginController::class,'authenticate']);

Route::middleware(['auth'])->group(function(){
    Route::get('/dashboard', function () {
        return view('dashboard');
    });
    Route::post('/logout',[LoginController::class,'logout']); 
    Route::get('/',[DashboardController::class,'index']);
    Route::get('/dashboard',[DashboardController::class,'index']);
    Route::get('/assets',[FileController::class,'open'])->name('file.open');
    Route::resource('/perusahaan', CompanyController::class);
    Route::resource('/perusahaan/detail', ItemController::class);
    Route::get('delete-item/{id}', [ItemController::class, 'destroy']);

    Route::get('/pengguna',function(){
        return view('user.pengguna');
    });
    Route::resource('/peralatan', ItemController::class);
});



Route::get('/', function () {
    return view('auth.login');
});

Route::get('/dashboard',[DashboardController::class,'index']);




// Route::get('/create', function () {
//     return view('user.create');
// });

Route::get('/index', function () {
    return view('user.pengguna');
});

// Route::get('/perusahaan', function () {
//     return view('user.component.perusahaan');
// });






// Route::resource('detail', ItemController::class);


// // Route::get('perusahaan', [CompanyController::class, 'index'])->name('perusahaan');
// Route::get('perusahaan/detail/{id}', [ItemController::class, 'show'])->name('item.detail');



// Route::get('/detail', function () {
//     return view('company.detail');
// });

Route::get('/peralatan', function () {
    return view('user.peralatan');
});



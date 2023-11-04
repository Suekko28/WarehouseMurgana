<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FileController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ItemsController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ToolsController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\DashboardController;

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
    Route::middleware(['isAdmin'])->group(function(){
        Route::get('delete-item/{id}', [ItemController::class, 'destroy']);
        Route::get('delete-user/{id}', [UserController::class, 'destroy']);
        Route::get('/pengguna',[UserController::class,'index']);
        Route::get('/peralatan',[ItemController::class,'index']);
        Route::get('/peralatan/export',[ItemController::class,'export_excel']);    
        Route::resource('/users',UserController::class);
    });
    Route::resource('/perusahaan', CompanyController::class);
    Route::post('/logout',[LoginController::class,'logout']); 
    Route::get('/',[DashboardController::class,'index']);
    Route::get('/dashboard',[DashboardController::class,'index']);
    Route::get('/search',[CompanyController::class,'search']);
    Route::get('/perusahaan/detail/{id}/search', [ItemController::class, 'search']);
    Route::get('/assets',[FileController::class,'open'])->name('file.open'); 
    Route::get('/download',[FileController::class,'download']);
    Route::resource('/perusahaan/detail', ItemController::class);
    
    
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





<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProjectController;
use Illuminate\Support\Facades\Auth;
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
})->name('welcome');
Auth::routes();

Route::middleware(['auth'])->group(function(){
    Route::resource('project', ProjectController::class);
    Route::get('/dashboard',[HomeController::class, 'dashboard'])->name('dashboard');
    Route::get('/home', [HomeController::class, 'index'])->name('home');
});

// Route::middleware('role:admin')->get('/admin', [AdminController::class,'index'])->name('index-admin');
Route::middleware('role:superadmin')->get('/admin', [HomeController::class, 'index'])->name('admin');
// Route::group(['middleware' => ['role:superadmin']], function () {
//     Route::get('/admin', [AdminController::class,'index'])->name('index-admin');
// });

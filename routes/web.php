<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
use App\Http\Controllers\TacheController;
use App\Http\Controllers\TachesController;
use App\Http\Controllers\Admin\UsersController;


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
    return view('auth.login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::name('admin.')->middleware('auth')->group(function(){
    Route::resource('users', UsersController::class)->middleware('auth');
});
Route::name('admin.')->middleware('auth')->group(function(){
    Route::resource('taches', TachesController::class);
});

Route::name('admin.')->middleware('auth')->group(function(){
    Route::resource('test', TestController::class);
});
  
require __DIR__.'/auth.php';

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeAdminController;
use App\Http\Controllers\StafController; 
use App\Http\Controllers\KepalaController;
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

Route::get('ami', function () {
    return view('welcome');
});
// Route::get('ami', function () {
//     return view('Admin.admindashboard');
// });

//  Route::resource('/', [HomeAdminController::class,'index'])->name('Admin.admindashboard');

//  Route::get('/', [HomeAdminController::class, 'index'])->name('Admin.admindashboard');

 Route::resource('/', HomeAdminController::class);
 Route::resource('staf', StafController::class);

 Route::resource('kepala',  KepalaController::class);


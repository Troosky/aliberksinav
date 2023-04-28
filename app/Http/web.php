<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
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
    return view('main');
});
Route::get('register', function () {
    return view('register');
});
Route::get('login', function () {
    return view('login');
});

Route::get('logOut', [Controller::class, 'logOut'])->name('logOut');
Route::get('main', [Controller::class, 'main'])->name('main');
Route::get('profil', [Controller::class, 'profil'])->name('profil');
Route::get('404', [Controller::class, 'hata'])->name('404');
Route::post('loginPost', [Controller::class, 'loginPost'])->name('loginPost');
Route::post('registerPost', [Controller::class, 'registerPost'])->name('registerPost');
Route::post('profilePost', [Controller::class, 'profilePost'])->name('profilePost');

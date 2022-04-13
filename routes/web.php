<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\isidatacontroller;
use App\Models\detail;
use App\Http\Controllers\logincontroller;
use App\Http\Controllers\logoutcontroller;
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
Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::post('/login', [logincontroller::class, 'authenticate']);

Route::post('/logout', [logoutcontroller::class, 'logout']);

Route::delete('/catatan/{id}', [logincontroller::class, 'destroy']);


Route::get('catatan', function () {
    $data = detail::get();
    return view('catatan', [
        'data' => $data
    ]);
});

Route::get('home', function () {
    $data = detail::get();
    return view('home', [
        'data' => $data
    ]);
})->name('home');

Route::get('isidata', function () {
    return view('isidata');
});

Route::post('isidata', [isidatacontroller::class, 'store']);
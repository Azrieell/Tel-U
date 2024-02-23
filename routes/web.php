<?php

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
    return view('awal');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/beranda', function () {
    return view('beranda');
});
Route::get('/my-journey', function () {
    return view('my-journey');
});
Route::get('/resume-builder', function () {
    return view('resume');
});
Route::get('/resume-builder-create', function () {
    return view('builder');
});
Route::get('/resume-builder-work', function () {
    return view('work');
});
Route::get('/resume-builder-organisational', function () {
    return view('organisational');
});
Route::get('/resume-builder-skil', function () {
    return view('skil');
});
Route::get('/resume-builder-education', function () {
    return view('education');
});
Route::get('/resume-builder-grafik', function () {
    return view('grafik');
});
Route::get('/job-portal', function () {
    return view('job');
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

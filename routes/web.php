<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;

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
});

Route::get('/input', function () {
    return view('pages.input');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', [PagesController::class, 'dashboard'] )->name('dashboard');

Route::middleware(['auth:sanctum', 'verified'])->get('/home', function () {
    return view('home');
})->name('home');

Route::middleware(['auth:sanctum', 'verified'])->get('/students', function () {
    return view('pages.tamatan');
})->name('student.index');

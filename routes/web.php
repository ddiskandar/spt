<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;

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

Route::view('/', 'auth.login' )->name('welcome');

Route::get('/input', function () {
    return view('pages.input');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', DashboardController::class )->name('dashboard');

Route::middleware(['auth:sanctum', 'verified'])->get('/home', function () {
    return view('home');
})->name('home');

Route::middleware(['auth:sanctum', 'verified'])->get('/students', function () {
    return view('pages.students');
})->name('student.index');

Route::middleware(['auth:sanctum', 'verified'])->get('/traces', function () {
    return view('pages.traces');
})->name('student.traces');

Route::middleware(['auth:sanctum', 'verified'])->get('/profiles', function () {
    return view('pages.profiles');
})->name('student.profiles');

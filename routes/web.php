<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;

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

Route::view('/', 'auth.login' )->middleware(['guest'])->name('welcome');

Route::middleware(['auth'])->get('/home', HomeController::class)->name('home');

Route::middleware(['auth', 'admin'])->group(function() {

    Route::get('/dashboard', DashboardController::class)
    ->name('dashboard');

    Route::get('/students', function () {
        return view('pages.students');
    })->name('student.index');

    Route::get('/traces', function () {
        return view('pages.traces');
    })->name('student.traces');

    Route::get('/setting', function () {
        return view('pages.setting');
    })->name('setting');
});
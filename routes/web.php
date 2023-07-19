<?php

use App\Http\Controllers\Auth\AuthenticatedController;
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
});

Route::get('/login', [AuthenticatedController::class, 'create'])->name('login');

Route::prefix('admin')->group(function () {
    Route::get('/', function () {
        echo 'Dashboard Admin';
        // return view('welcome');
    })->name('admin.dashboard');
});

Route::prefix('operator')->group(function () {
    Route::get('/', function () {
        echo 'Operator Page';
        // return view('welcome');
    })->name('operator.dashboard');
});

<?php

use App\Http\Controllers\AdministrationController;
use App\Http\Controllers\Auth\AuthenticatedController;
use App\Http\Controllers\PatientController;
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

Route::prefix('kelurahan')->group(function () {
    Route::get('/', [AdministrationController::class, 'create'])->name('admin.add');
});

Route::prefix('pasien')->group(function () {
    Route::get('/', [PatientController::class, 'create'])->name('patient.add');
});

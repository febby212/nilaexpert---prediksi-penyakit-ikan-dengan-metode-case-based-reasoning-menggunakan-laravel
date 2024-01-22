<?php

use App\Http\Controllers\admin\CasebaseController;
use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\admin\GejalaController;
use App\Http\Controllers\admin\PenyakitsolusiController;
use App\Http\Controllers\admin\UniversalController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\user\UserController;
use Illuminate\Support\Facades\Route;

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
    $ref = 'Home';
    return view('index', compact('ref'));
});

Route::get('register', [AuthController::class, 'ShowRegis'])->name('index_regist');
Route::post('register/new', [AuthController::class, 'regis'])->name('regist');
Route::get('login', [AuthController::class, 'index'])->name('login');
Route::post('authanticate', [AuthController::class, 'cekKredensial'])->name('auth');
Route::get('/redirect', [AuthController::class, 'redirectAuth'])->name('redirect');
Route::post('logout', [AuthController::class, 'logout'])->name('logout');

Route::group(['middleware' => ['auth', 'checkRole:admin']], function() {
    Route::get('admin', [AdminController::class, 'index'])->name('admin');
    Route::group(['prefix' => 'admin'], function() {
        Route::resource('casebase', CasebaseController::class);
        Route::resource('gejala', GejalaController::class);
        Route::resource('penyakit-solusi', PenyakitsolusiController::class);
        Route::resource('user-hasil', UniversalController::class);
        Route::get('hasil-konsul', [UniversalController::class, 'index'])->name('hasil');
    });

});

Route::group(['middleware' => ['auth', 'checkRole:user']], function() {
    Route::get('user', [UserController::class, 'index'])->name('user');
    Route::get('user/konsultasi', [UserController::class, 'konsultasi'])->name('konsul');
    Route::post('user/konsultasi/hitung', [UserController::class, 'hitungKonsul'])->name('hitung');
    Route::get('user/riwayat', [UserController::class, 'riwayat'])->name('riwayat');
});

Route::group(['prefix' => 'user'], function() {
    Route::get('daftar-penyakit', [UserController::class, 'penyakit'])->name('penyakit');
    Route::get('petunjuk', [UserController::class, 'petunjuk'])->name('petunjuk');
    Route::get('pengembang', [UserController::class, 'pengembang'])->name('pengembang');
});

// Route::resource('example', ExampleController::class);




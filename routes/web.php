<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ArsipController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Arsip2Controller;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('login', function () {
    return view('login');
});

Route::get('/', [HomeController::class, 'index']);

Route::get('register', [HomeController::class, 'register']);
Route::get('kontak', [HomeController::class, 'kontak']);
Route::get('peta', [HomeController::class, 'peta']);
Route::get('pola', [HomeController::class, 'pola']);
Route::get('brosur', [HomeController::class, 'brosur']);

Route::middleware(['web'])->group(function () {
    // Semua route yang membutuhkan session dan validasi
    Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [AuthController::class, 'login']);
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
});


Route::middleware('web')->group(function(){
    Route::get('dashboard', [HomeController::class, 'dashboard']);
    Route::get('arsip', [ArsipController::class, 'index']);
    Route::get('arsip/create', [ArsipController::class, 'create']);
    Route::post('arsip', [ArsipController::class, 'store']);
    Route::get('arsip/{arsip}', [ArsipController::class, 'show']);
    Route::get('arsip/{arsip}/edit', [ArsipController::class, 'edit']);
    Route::put('arsip/{arsip}', [ArsipController::class, 'update']);
    Route::delete('arsip/{arsip}', [ArsipController::class, 'delete']);


    Route::get('/arsip2', [Arsip2Controller::class, 'index'])->name('arsip2.index');
    Route::get('/arsip2/create', [Arsip2Controller::class, 'create'])->name('arsip2.create');
    Route::post('/arsip2', [Arsip2Controller::class, 'store'])->name('arsip2.store');
    Route::get('/arsip2/{arsip2}', [Arsip2Controller::class, 'show'])->name('arsip2.show');
    Route::get('/arsip2/{arsip2}/edit', [Arsip2Controller::class, 'edit'])->name('arsip2.edit');
    Route::put('/arsip2/{arsip2}', [Arsip2Controller::class, 'update'])->name('arsip2.update');
    Route::delete('/arsip2/{arsip2}', [Arsip2Controller::class, 'delete'])->name('arsip2.delete');


    Route::get('pengguna', [UserController::class, 'index']);
    Route::get('pengguna/create', [UserController::class, 'create']);
    Route::post('pengguna', [UserController::class, 'store']);
    Route::get('pengguna/{user}', [UserController::class, 'show']);
    Route::get('pengguna/{user}/edit', [UserController::class, 'edit']);
    Route::put('pengguna/{user}', [UserController::class, 'update']);
    Route::delete('pengguna/{user}', [UserController::class, 'delete']);


});








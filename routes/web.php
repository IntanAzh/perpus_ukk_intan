<?php

use App\Http\Controlles\StoreBookRequest;
use App\Http\Controllers\BookController;
use App\Http\Controllers\DhasboardController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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



Route::get('/', [UserController::class, 'dashboard'])->name('dashboard');
Route::get('/detailbook/{id}', [UserController::class, 'detail'])->name('detail');

Auth::routes();


Route::group(['middleware' => ['auth']], function () {
    Route::post('/register', [RegisterController::class, 'register'])->name('register');
    Route::get('/book/index', [DhasboardController::class, 'index'])->name('dashboard');
    Route::get('/book', [BookController::class, 'index'])->name('indexbuku');
    Route::resource('buku', BookController::class);
//exportPDF
    Route::get('/exportpdf', [DhasboardController::class, 'exportpdf'])->name('exportpdf');
//exportExcle
    Route::get('/exportexcel', [DhasboardController::class, 'export_excel'])->name('export_excel');

    });





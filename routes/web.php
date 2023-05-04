<?php


use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\AntrianController;

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
    return view('landingpage.landingpage');
});

Route::get('/testnavbar', function () {
    return view('layouts.navbar');
});

// Route::get('/sebelumcheckout', [OrderController::class, 'index'])->middleware('auth');
// Route::post('/order', [OrderController::class, 'order'])->middleware('auth');
// Route::get('/invoice/{id}', [OrderController::class, 'invoice'])->middleware('auth');

//tombol setelah invoice
Route::post('/setelahinvoice', [InvoiceController::class, 'push']);

Auth::routes();

Route::get('/antrian', [AntrianController::class, 'index']);
// Route::get('/antrian/{id}/edit', [AntrianController::class, 'edit']);
Route::post('/antrian', [AntrianController::class, 'showDate']);
Route::delete('/antrian/{id}', [AntrianController::class, 'destroy']);
Route::put('/antrian/{id}', [AntrianController::class, 'update']);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::group(['middleware' => ['auth', 'cekLevel:user']], function () {

    Route::get('/sebelumcheckout', [OrderController::class, 'index']);
    Route::post('/order', [OrderController::class, 'order']);
    Route::get('/invoice', [InvoiceController::class, 'index']);
    Route::get('/invoice/{id}', [OrderController::class, 'invoice']);
});

Route::group(['middleware' => ['auth', 'cekLevel:admin']], function () {

    Route::get('/antrian/{id}/edit', [AntrianController::class, 'edit']);
});

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HelloController;
use App\Http\Controllers\ClientController as CL;

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
    return view('welcome');
});


Route::get('/hello/client', [HelloController::class, 'hello'])->name('client');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::prefix('clients')->name('clients-')->group(function () {
    Route::get('/', [CL::class, 'index'])->name('index');
    Route::get('/create', [CL::class, 'create'])->name('create');
    Route::post('/create', [CL::class, 'store'])->name('store');
    Route::get('/{client}', [CL::class, 'show'])->name('show');
    Route::get('/edit/{client}', [CL::class, 'edit'])->name('edit');
    Route::put('/edit/{client}', [CL::class, 'update'])->name('update');
    Route::delete('/delete/{client}', [CL::class, 'destroy'])->name('delete');
});
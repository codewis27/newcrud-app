<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BooksController;

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
Route::get('/', [BooksController::class, 'index'])->name('books');
Route::get('/formtambahdata', [BooksController::class, 'formtambahdata'])->name('formtambahdata');
Route::post('/tambahdata', [BooksController::class, 'tambahdata'])->name('tambahdata');
Route::get('/formeditdata/{id}', [BooksController::class, 'formeditdata'])->name('formeditdata');
Route::post('/updatedata/{id}', [BooksController::class, 'updatedata'])->name('updatedata');
Route::get('/deletedata/{id}', [BooksController::class, 'deletedata'])->name('deletedata');
Route::get('/testemplate', [BooksController::class, 'testemplate'])->name('testemplate');

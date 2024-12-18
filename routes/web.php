<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EditController;
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

//list 
Route::get('/list', [EditController::class, 'index_list']);

//add
Route::get('/add', [EditController::class, 'add']);
Route::post('/add', [EditController::class, 'insert']);


// edit
Route::get('/Edit/{id}', [EditController::class, 'edit']);
Route::post('/Edit/{id}', [EditController::class, 'update']);

//delete
Route::get('/delete/{id}',[EditController::class, 'delete']);
///


Auth::routes();

Route::get('/list', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

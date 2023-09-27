<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\studentController;

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

Route::get('/',[studentController::class,'index'])->name('/');
Route::get('/add',[studentController::class,'add'])->name('add');
Route::post('/add',[studentController::class,'store'])->name('store');
Route::get('{id}/edit',[studentController::class,'edit'])->name('edit');
Route::put('{id}/update',[studentController::class,'update'])->name('update');
Route::get('{id}/delete',[studentController::class,'delete'])->name('delete');

<?php

use App\Http\Controllers\PetController;
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

Route::get('/', [PetController::class, 'listBreed'])->name('breed.list');
Route::post('/breed/edit/{id?}', [PetController::class, 'editBreed'])->name('breed.edit');
Route::delete('/breed/delete/{id}', [PetController::class, 'deleteBreed'])->name('breed.delete');
Route::get('/breed/show/{id}', [PetController::class, 'showBreed'])->name('breed.show');
Route::put('/breed/update/{id}', [PetController::class, 'editBreed'])->name('breed.put');

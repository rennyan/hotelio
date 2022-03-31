<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HotelController;

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

// Route::get('/', function () {
//     return view('dashboard');
// Route::resource('hotel', HotelController::class);
// });

Route::get('/', [HotelController::class,'home']);
Route::get('/hotels', [HotelController::class,'hotels']);
Route::get('/add', [HotelController::class, 'create'])->name('create');
Route::post('/store', [HotelController::class, 'store'])->name('store');
Route::get('/detail/{id}', [HotelController::class, 'show']);
Route::get('/edit/{id}', [HotelController::class, 'edit'])->name('edit');
Route::put('/edit/{id}', [HotelController::class, 'update'])->name('update');
Route::delete('/detail/{id}', [HotelController::class, 'destroy'])->name('destroy');

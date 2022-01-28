<?php

use App\Http\Controllers\CardController;
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

Route::get('/', [CardController::class,'index']);

Route::get('/upload-cards', [CardController::class,'upload']);
Route::post('/upload-cards', [CardController::class,'uploadCards'])->name('uploadcards');



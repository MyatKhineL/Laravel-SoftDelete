<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FruitController;

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
Route::get('/fruit',[FruitController::class,'index']);
Route::delete('/fruit/destroy/{id}',[FruitController::class,'destroy'])->name('fruit.destroy');
Route::post('/fruit/restore/{id}',[FruitController::class,'restore'])->name('fruit.restore');
Route::get('archive',[FruitController::class,'archive']);
Route::post('/fruit/perdelete/{id}',[FruitController::class,'perdelete'])->name('fruit.perdelete');

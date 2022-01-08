<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\CdController;
use App\Http\Controllers\GameController;


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



Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

route::get('/redirect',[HomeController::class,'redirect']);

route::get('/',[HomeController::class,'index']);

route::get('/books',[BookController::class,'books']);

route::get('/cds',[CdController::class,'cds']);

route::get('/games',[GameController::class,'games']);

route::post('/uploadbooks',[BookController::class,'uploadbooks']);
route::post('/uploadcds',[CdController::class,'uploadcds']);
route::post('/uploadgames',[GameController::class,'uploadgames']);






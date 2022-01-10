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
route::get('/search',[HomeController::class,'search']);


route::get('/books',[BookController::class,'books']);
route::get('/books',[BookController::class,'book']);
route::get('/showbooks',[BookController::class,'showbooks']);
route::get('/deletebooks/{id}',[BookController::class,'deletebooks']);
route::get('/updatebooks/{id}',[BookController::class,'updatebooks']);
route::post('/updatebook/{id}',[BookController::class,'updatebook']);
route::get('/search',[BookController::class,'search']);







route::get('/cds',[CdController::class,'cds']);
route::get('/cds',[CdController::class,'cd']);
route::get('/showcds',[CdController::class,'showcds']);
route::get('/deletecds/{id}',[CdController::class,'deletecds']);
route::get('/updatecds/{id}',[CdController::class,'updatecds']);
route::post('/updatecd/{id}',[CdController::class,'updatecd']);
route::get('/search',[CdController::class,'search']);







route::get('/games',[GameController::class,'games']);
route::get('/games',[GameController::class,'game']);
route::get('/showgames',[GameController::class,'showgames']);
route::get('/deletegames/{id}',[GameController::class,'deletegames']);
route::get('/updategames/{id}',[GameController::class,'updategames']);
route::post('/updategame/{id}',[GameController::class,'updategame']);
route::get('/search',[GameController::class,'search']);







route::post('/uploadbooks',[BookController::class,'uploadbooks']);
route::post('/uploadcds',[CdController::class,'uploadcds']);
route::post('/uploadgames',[GameController::class,'uploadgames']);






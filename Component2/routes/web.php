<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;


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
//Auth:routes();
Route::get('/products', [ProductController::class,'makeProductArray']);

Route :: get ('/products/{id}',[ProductController::class, 'getProductWithId']);
Route :: get ('/delete/{id}', [ProductController::class, 'deleteProductWithId']);
Route ::post('/products/store', [ProductController::class,'addNewProduct']);
Route ::post('/products/update/{id}', [ProductController::class, 'updateProductWithId']);
// Route::resource('products', ProductController::class);

//Route::delete('/products',funtion(){ returnresponse()->json(['msg'=>'success']); 
//});
?>
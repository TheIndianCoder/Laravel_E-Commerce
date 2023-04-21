<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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

Route::get('/login',[UserController::class,'index']);
Route::post('/login',[UserController::class,'userLogin']);
Route::get('/register',[UserController::class,'register']);
Route::post('/register',[UserController::class,'userRegister']);
Route::get('/logout',[UserController::class,'logout']);

Route::get('/',[ProductController::class,'index']);

Route::get('details/{id}', [ProductController::class, 'detailsProduct']);

Route::get('add_to_cart', [ProductController::class,'addToCart'])->middleware('userlogin');

Route::get('/cart' ,[ProductController::class, 'showCart']);

Route::get('removecart/{id}', [ProductController::class, 'removeCart']);

Route::get('/ordernow', [ProductController::class, "orderNow"]);

Route::post('/payment' , [ProductController::class, 'orderPlaced']);

Route::get('/myorders', [ProductController::class, 'myOrders']);
// Route::get('/details', function(){
//     return view('details');
// });



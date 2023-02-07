<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;    

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

Route::get('/test', function () {
    return view('test');
});

Route::get('/home', [CategoryController::class,'index']);
Route::get('/add_category', [CategoryController::class,'add_category']);
Route::post('/store_category',[CategoryController::class,'storecategory']);
Route::get('/edit_category/{id}',[CategoryController::class,'editcategory']);
Route::put('/update_category/{id}',[CategoryController::class,'updatecategory']);
Route::get('/delete_category/{id}',[CategoryController::class,'deletecategory']);
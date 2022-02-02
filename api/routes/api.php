<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\CompaniesController;
use App\Http\Controllers\CategoriesController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


Route::post('/create-account', [AuthController::class, 'signup']);
Route::post('/signin', [AuthController::class, 'signin']);

Route::group(['middleware' => ['auth:sanctum']], function () {
    
    Route::post('/my-account', [AuthController::class, 'myAccount']);

    //categories
    
    Route::post('/categories' , [CategoriesController::class,'store']);
    Route::put('/categories' , [CategoriesController::class,'update']);
    Route::delete('/categories' , [CategoriesController::class,'destroy']);

    //companies
    Route::post('/companies' , [CompaniesController::class,'store']);
    Route::put('/companies' , [CompaniesController::class,'update']);
    Route::delete('/companies' , [CompaniesController::class,'destroy']);
    
    //products
    Route::post('/products' , [ProductsController::class,'store']);
    Route::put('/products' , [ProductsController::class,'update']);
    Route::delete('/products' , [ProductsController::class,'destroy']);
});


//categories
Route::get('/categories' , [CategoriesController::class,'index']);
Route::get('/categories/{id}' , [CategoriesController::class,'show']);

//companies
Route::get('/companies' , [CompaniesController::class,'index']);
Route::get('/companies/{id}' , [CompaniesController::class,'show']);

//products
Route::get('/products' , [ProductsController::class,'index']);
Route::get('/products/{id}' , [ProductsController::class,'show']);

//rounte 

/*Route::resource('/categories' , CategoriesController::class);
Route::resource('/companies' , CompaniesController::class);
Route::resource('/products' , ProductsController::class);
*/



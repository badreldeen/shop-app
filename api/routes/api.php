<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
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


//Category
Route::resource('/categories' , CategoriesController::class);
Route::resource('/companies' , CompaniesController::class);
Route::resource('/products' , ProductsController::class);


//categories

//Route::get('/categories/{id}',[CompaniesController::class,'GetMainCategories']);
Route::get('/categories/{id}',[CategoriesController::class,'BrowseCategory']);

//companies

//Route::get('/companies/{id}',[CompaniesController::class,'']);


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\categorieController; 
use App\Http\Controllers\UserController;

Route::post('/reppp',[UserController::class,'reppp']); 
Route::post('/creecategory',[UserController::class,'cate']); 
Route::post('/creeqst',[UserController::class,'qsst']); 
Route::post('/cchoi',[UserController::class,'choo']); 
Route::post('/delete01', 'categorycontroller@delete01');
Route::post('/delete11', 'categorycontroller@delete11');
Route::post('/register',[UserController::class,'register']); // Singup URL 
Route::post('/reactlogin',[UserController::class,'login']); // lOGIN url
Route::get('/categoryee', 'categorycontroller@indexe');
Route::get('/qst', 'categorycontroller@qstt');
Route::get('/categorye', 'categorycontroller@index');
Route::get('/categ', 'categorycontroller@catg');
Route::get('/category/ml','categorycontroller@ml');
Route::get('/categoryeee', 'categorycontroller@indexee');
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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

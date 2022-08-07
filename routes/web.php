<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\categorieController; 

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
Route::get('/accueil','PageController@afficheraccueil'); 
Route::get('/page1','PageController@afficherpage1');    
Route::get('/page2','PageController@afficherpage2');
Route::get('/category/choix','categorycontroller@choix');
route::get('/accueil/1','categorycontroller@showacc');
route::get('/category/form','categorycontroller@showformcategorie');

route::post('/category/add','categorycontroller@addcategory');
route::get('/category/list','categorycontroller@liste');
route::get('/category/delete/{id}','categorycontroller@delete');

//on peut inserer route avec name 
Route::get('/category/details/{id}', array('as'=> 'itsolutionstuff.tag', 'uses' => 'categorycontroller@details'));
route::get('/category/delete2/{id}','categorycontroller@delete2');

Route::get('/category/details2/{id}','categorycontroller@details2');
Route::get('/category/edit/{id}','categorycontroller@edit');

route::post('/category/sousadd/{id}','categorycontroller@addsouscategory');

route::post('/update','categorycontroller@update');

Route::get('/category/qst2/{id}', array('as'=> 'ff2', 'uses' => 'categorycontroller@qst2'));

route::get('/repptype','categorycontroller@repptype');

Route::get('/category/qsttt/{id}','categorycontroller@qsttt');
route::post('/repp/{qstf}','categorycontroller@repp');
route::post('/reppp/{integer}','categorycontroller@reppp');
Route::get('/category/quize','categorycontroller@quize');
Route::get('/category/quizee','categorycontroller@quizee');
route::post('/box/{id}','categorycontroller@box');

Route::post('/repon','categorycontroller@repon');
Route::POST('/category/step1','categorycontroller@step');
Route::POST('/category/resu','categorycontroller@step01');
Route::get('/category/dd/{va}', array('as'=> 'bb', 'uses' => 'categorycontroller@stt'));
Route::get('/category/dd/{va}', array('as'=> 'nn', 'uses' => 'categorycontroller@ll'));

Route::get('/category/ddd/{in}', array('as'=> 'hhh', 'uses' => 'categorycontroller@stt2'));
Route::POST('/category/step2/{in}','categorycontroller@step22');


Route::get('/category/dddd/{in}', array('as'=> 'hhhh', 'uses' => 'categorycontroller@stt3'));
Route::POST('/category/step3/{in}','categorycontroller@step3');
Route::POST('/category/step44/{in}','categorycontroller@step4');
Route::get('/category/dddd4/{in}', array('as'=> 'hhhh4', 'uses' => 'categorycontroller@stt4'));
Route::get('/category/ml/{tt}','categorycontroller@mll');
Route::get('/category/mla/', array('pass'=> 'pass', 'uses' =>'categorycontroller@mlla'));
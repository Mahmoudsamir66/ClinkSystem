<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

//Route::middleware('auth:api')->get('/user', function (Request $request) {
//    return $request->user();
//});
//Route::get('/home','App\Http\Controllers\admincontroller@api')->name('Dashboard');

Route::group(['middleware' => ['api']],function (){
    Route::post('get-main-categories','App\Http\Controllers\Api\CategoriesController@index');
    Route::get('get-one-category','App\Http\Controllers\Api\CategoriesController@getid');

});

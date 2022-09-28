<?php

use Illuminate\Support\Facades\Route;

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


Route::group(['as'=>'admin.','prefix'=>'admin/'],function (){
    Route::get('login','App\Http\Controllers\loginController@index')->name('login');
    Route::post('login.store','App\Http\Controllers\loginController@loginStore')->name('login.store');
    Route::get('logout','App\Http\Controllers\loginController@logout')->name('logout');
});

Route::group(['middleware'=>'auth'],function () {
Route::get('/','App\Http\Controllers\admincontroller@welcome')->name('Dashboard');
Route::get('/home','App\Http\Controllers\admincontroller@welcome')->name('Dashboard');
Route::get('/ajax','App\Http\Controllers\admincontroller@ajax');

////clink
Route::group(['as'=>'clink.','prefix'=>'clink/'],function (){
   Route::get('create','App\Http\Controllers\clink@create')->name('create');
   Route::post('store','App\Http\Controllers\clink@store')->name('store');
});
//doctors
    Route::group(['as'=>'doctor.','prefix'=>'doctor/'],function (){
        Route::get('create','App\Http\Controllers\doctorController@create')->name('create');
        Route::post('store','App\Http\Controllers\doctorController@store')->name('store');
    });

    Route::group(['as'=>'doctor.','prefix'=>'doctor/'],function (){
        Route::get('create','App\Http\Controllers\doctorController@create')->name('create');
        Route::post('store','App\Http\Controllers\doctorController@store')->name('store');
    });
    Route::group(['as'=>'patient.','prefix'=>'patient/'],function (){
        Route::get('create','App\Http\Controllers\PatientController@create')->name('create');
        Route::post('store','App\Http\Controllers\PatientController@store')->name('store');
    });

    /// Detection
    Route::group(['as'=>'detect.','prefix'=>'detect/'],function (){
        Route::get('create','App\Http\Controllers\DetectController@create')->name('create');
        Route::post('store','App\Http\Controllers\DetectController@store')->name('store');
    });

});


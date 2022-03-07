<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\sendData;
use \App\Http\Controllers\UserAuth;

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
    return view('Registration');
});
Route::view('registration', 'Registration');
Route::view('Profile', 'Profile');
Route::post('/save',[sendData::class,'store']);
//Route::post('/user',[UserAuth::class,'userLogin']);
Route::get('/list',[sendData::class,'show']);
Route::view('update', 'Update');
Route::view('Login','Login' );
Route::get('/del/{id}',[sendData::class,'del']);
Route::get('/edit/{id}',[sendData::class,'edit']);
Route::post('/update/{id}',[sendData::class,'update']);
//Route::post('/user',[UserAuth::class,'getD']);
Route::post('/user',[UserAuth::class,'check']);
Route::get('/user',[UserAuth::class,'getD']);



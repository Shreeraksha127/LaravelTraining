<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Users;

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


Route::get("users",[Users::class,'index']);
Route::view("login",'users')->middleware('protectedPage');
Route::view("home",'home');
Route::view("noaccess",'noaccess');

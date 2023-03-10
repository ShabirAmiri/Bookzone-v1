<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\loginController;
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

Route::get('/',[HomeController::class,'index']);
Route::get('/first', function () {
    return view('first');
});

Route::get('/about', function(){
  return view ('about');


});
// Route::view("contact", 'contact');
Route::get('/contact', function(){

    return view('contact');
});

//register controller
Route::get('/register',[RegisterController::class,'register']);

//login controller
Route::get('/login',[loginController::class,'login']);
Route::POST('/upload',[Homecontroller::class,'upload']);

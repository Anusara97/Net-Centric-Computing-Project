<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('Home');
});

//Route::view("/",'Home');
//Route::get("/", [TestController::class, 'index']);

Route::view("/login",'auth/login');
Route::view("/register",'auth/register');
Route::get("/result",[TestController::class, 'getData']);

Route::view("/add",'AddPaper');
Route::view("/dashboard",'Dashboard');


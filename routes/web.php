<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TempUserController;
use App\Http\Controllers\PastPaperController;

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
Route::post("/save",[TestController::class, 'login']);

Route::view("/register",'auth/register');
Route::post("/register",[TempUserController::class, 'addTempUser']);
Route::get('/tempUserList',[TempUserController::class, 'showTempUsers']);
Route::get('approve/{id}',[TempUserController::class,'registerUser']);
Route::get('remove/{id}',[TempUserController::class,'Remove']);

Route::view("/add",'AddPaper');
Route::post("/add", [PastPaperController::class, 'addPaper']);

Route::view("/dashboard",'Dashboard');

Route::get('logout', function () {
    if (session()->has('user')) {
        session()->pull('user');
    }
    return redirect('/login');
});

Route::get('/userList',[UserController::class, 'showUsers']);
Route::get('removeUser/{id}',[UserController::class,'Remove']);

//Dashboards
Route::view("/dashboardAdmin",'dashboards/adminDashboard');
Route::view("/dashboardStaff",'dashboards/staffDashboard');
Route::view("/dashboardStudent",'dashboards/studentDashboard');
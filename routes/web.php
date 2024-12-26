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

//User login operations
Route::view("/login",'auth/login');
Route::post("/loginUser",[UserController::class, 'loginUser']);
//Route::post("/save",[TestController::class, 'login']);

//Access Dashboards
Route::get('/dashboard',[UserController::class,'dashboards']);
//User logout
Route::get('/logout',[UserController::class,'logout']);

//Register operations
Route::view("/register",'auth/register');
Route::post("/register",[TempUserController::class, 'addTempUser']);
Route::get('/tempUserList',[TempUserController::class, 'showTempUsers']);
Route::get('approve/{id}',[TempUserController::class,'registerUser']);
Route::get('remove/{id}',[TempUserController::class,'Remove']);

//Paper Operations
Route::view("/add",'AddPaper');
Route::post("/add", [PastPaperController::class, 'addPaper']);
Route::get("/papers",[PastPaperController::class, 'viewPapers']);
Route::get('removePaper/{id}', [PastPaperController::class, 'Remove'])->name('removePaper');
Route::get('/downloadPaper/{id}', [PastPaperController::class, 'downloadPaper'])->name('download.paper');

//User Operations
Route::get('/userList',[UserController::class, 'showUsers']);
Route::get('removeUser/{id}',[UserController::class,'Remove']);
// editable purposes
Route::view('editUser','editUser');
Route::get('editUser/{id}',[UserController::class,'editUser']);
Route::post('/updateUser',[UserController::class,'updateUser']);

//Dashboards
Route::view("/dashboardAdmin",'dashboards/adminDashboard');
Route::view("/dashboardStaff",'dashboards/staffDashboard');
Route::view("/dashboardStudent",'dashboards/studentDashboard');
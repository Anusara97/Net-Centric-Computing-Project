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
})->middleware('alreadyLoggedIn');

//User login operations
Route::view("/login",'auth/login')->middleware('alreadyLoggedIn');
Route::post("/loginUser",[UserController::class, 'loginUser']); //operational link

//Access Dashboards
Route::get('/dashboard',[UserController::class,'dashboards']); //by deafault can't access outside the system
Route::view('/inner','dashboards/dashboardInnerAdmin')->middleware(['adminOnly','isLoggedIn']);
//User logout
Route::get('/logout',[UserController::class,'logout']); //operational link

//Register operations
Route::view("/register",'auth/register')->middleware('alreadyLoggedIn'); //visible to anyone
Route::post("/register",[TempUserController::class, 'addTempUser']); //save detaila in a temp table
Route::get('/tempUserList',[TempUserController::class, 'showTempUsers'])->middleware(['adminOnly','isLoggedIn']); //view temp list. Should be related to admin
Route::get('approve/{id}',[TempUserController::class,'registerUser']); //operational link
Route::get('remove/{id}',[TempUserController::class,'Remove']); //operational link
//User registration by admin directly.
Route::view("/addUser",'auth/addUser')->middleware(['adminOnly','isLoggedIn']);
Route::post("/addUser",[UserController::class, 'addUser'])->middleware(['adminOnly','isLoggedIn']);


//Paper Operations
Route::view("/add",'AddPaper')->middleware(['staffOnly','isLoggedIn']); //should be visible to the admin and staff
Route::post("/add", [PastPaperController::class, 'addPaper']); //operational link
Route::get("/papers",[PastPaperController::class, 'viewPapers'])->middleware('isLoggedIn');
Route::get('removePaper/{id}', [PastPaperController::class, 'Remove'])->name('removePaper'); // visible to admin
Route::get('/downloadPaper/{id}', [PastPaperController::class, 'downloadPaper'])->name('download.paper'); // visible to all users
//This is visible only for students.
Route::get('/innerPapers',[PastPaperController::class, 'viewInnerPapers'])->middleware('isLoggedIn');

//User Operations
Route::get('/userList',[UserController::class, 'showUsers'])->middleware(['adminOnly','isLoggedIn']); //visible to admin
Route::get('removeUser/{id}',[UserController::class,'Remove']); //visible to admin
// editable purposes
//Route::view('editUser','editUser'); //visible to admin
Route::get('editUser/{id}',[UserController::class,'editUser']); //visible to admin
Route::post('/updateUser',[UserController::class,'updateUser']); //visible to admin

Route::view('/testView', 'test');
<?php

use Illuminate\Http\Request;
use App\Http\Controllers\Api\AuthController;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
use App\Http\Controllers\Api\SettingController;
>>>>>>> feature/setting
=======
use App\Http\Controllers\Api\CategoryController;
use App\Http\Controllers\Api\Project_DetailController;
use App\Http\Controllers\Api\ProjectController;
>>>>>>> feature/Projects
use Illuminate\Support\Facades\Route;

=======
use Illuminate\Support\Facades\Route;




use App\Http\Controllers\Api\EmployeeController;

>>>>>>> feature/Employee
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/register',[AuthController::class,'register']);
Route::post('/login',[AuthController::class,'login']);
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
Route::get('/{token}/verify',[AuthController::class,'verify']);


=======

Route::post('settings',[SettingController::class,'index']);
>>>>>>> feature/setting
=======

// Projects_categories 
Route::get('/Category',[CategoryController::class,'all']);
Route::get('/Category/{id}',[CategoryController::class,'show']);
Route::post('/Category/create',[CategoryController::class,'store']);
Route::put('/Category/update/{id}',[CategoryController::class,'update']);
Route::delete('/Category/delete/{id}',[CategoryController::class,'delete']);

// Projects
// كل المشاريع الظاهره والمخفيه
Route::get('/projects',[ProjectController::class,'all']);
Route::get('/projects/{id}',[ProjectController::class,'show']);
Route::post('/projects/create',[ProjectController::class,'store']);
Route::put('/projects/update/{id}',[ProjectController::class,'update']);
Route::delete('/projects/delete/{id}',[ProjectController::class,'delete']);


// id كل مشايع الموجوده فى قسم معين  ب 
Route::get('/project_category/{id}',[ProjectController::class,'categorries']);
// كل المشاريع الل ظاهره بس المخفيه لااا
Route::get('/projects_nothidden',[ProjectController::class,'appear']);
//كل المشاريع المخفيه
Route::get('/projects_hidden',[ProjectController::class,'hidden']);
>>>>>>> feature/Projects
=======



Route::apiResource('employees', EmployeeController::class);

>>>>>>> feature/Employee

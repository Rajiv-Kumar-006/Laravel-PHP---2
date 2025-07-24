<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\user;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\ShowApiDataController;
use App\Http\Controllers\DataBaseBuilder;
use App\Http\Controllers\LoginForm;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/user', [user::class, 'users']);
Route::get('/student', [StudentController::class, 'students']);
Route::get('/show-api-data', [ShowApiDataController::class, 'showApiData']);


Route::get('/database-builder', [DataBaseBuilder::class, 'queries']);


// from 
Route::view("form", "formHandle.loginForm" );
Route::post("/login-submit", [LoginForm::class, "loginHandle"])->name('login');
Route::view('/profile', 'formHandle.profile')->name('formHandle.profile');
Route::get('/logout', [LoginForm::class, 'logout'])->name('logout'); 



















// use Illuminate\Support\Facades\DB;
// use Illuminate\Support\Facades\Schema;

// Route::get('/check-db', function () {
//     $dbName = DB::connection()->getDatabaseName();
//     $tables = Schema::hasTable('users') ? 'Yes' : 'No';
//     return "Connected to DB: <b>$dbName</b><br>Users table exists? <b>$tables</b>";
// });

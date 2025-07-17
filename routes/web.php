<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\user;
use App\Http\Controllers\StudentController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/user', [user::class, 'users']);
Route::get('/student', [StudentController::class, 'students']);







// use Illuminate\Support\Facades\DB;
// use Illuminate\Support\Facades\Schema;

// Route::get('/check-db', function () {
//     $dbName = DB::connection()->getDatabaseName();
//     $tables = Schema::hasTable('users') ? 'Yes' : 'No';
//     return "Connected to DB: <b>$dbName</b><br>Users table exists? <b>$tables</b>";
// });

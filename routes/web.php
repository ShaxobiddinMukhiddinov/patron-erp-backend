<?php

use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\StudentController;
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

Route::get('/students/list', [StudentController::class, 'index']);
Route::get('/students/store', [StudentController::class, 'store']);
Route::get('/students/delete/{id}', [StudentController::class, 'delete']);
Route::get('/students/update/{id}', [StudentController::class, 'update']);
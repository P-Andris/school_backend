<?php

use App\Http\Controllers\TaskController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/api/tasks', [TaskController::class, 'index']);
Route::get('/api/tasks/{id}', [TaskController::class, 'show']);
Route::post('/api/tasks', [TaskController::class, 'store']);
Route::put('/api/tasks/{id}', [TaskController::class, 'update']);
Route::delete('/api/tasks/{id}', [TaskController::class, 'destroy']);

// VIEW - ahol megjeleníthetem az adatokat
// Új task létrehozása:
Route::get('task/new', [TaskController::class, 'newView']);
// Task módosítása:
Route::get('task/edit/{id}', [TaskController::class, 'editView']);
// Task-ok kilistázása:
Route::get('task/list', [TaskController::class, 'listView']);
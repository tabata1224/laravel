<?php

use Illuminate\Support\Facades\Route;
/* TaskControllerクラスを名前空間でインポートする */
use App\Http\Controllers\TaskController;
use App\Http\Controllers\FolderController;

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
    return view('welcome');
});

/* index page */
Route::get("/folders/{id}/tasks", [TaskController::class, "index"])->name("tasks.index");

/* folders new create page */
Route::get('/folders/create', [FolderController::class, "showCreateForm"])->name('folders.create');
Route::post('/folders/create', [FolderController::class, "create"]);

/* tasks new create page */
Route::get('/folders/{id}/tasks/create', [TaskController::class, "showCreateForm"])->name('tasks.create');
Route::post('/folders/{id}/tasks/create', [TaskController::class, "create"]);
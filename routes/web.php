<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('auth.login');
});

Route::get('/registerPage', function () {
    return view('auth.register');
})->name('userRegister');



// Rest Routes

Route::get('/layout', function () {
    return view('panel.layout.app');
});


// TASK ROUTELARI

Route::get('/panel/tasks/index/{id}',[TaskController::class,'index'])->name('panel.TaskIndex');

Route::get('panel/tasks/create',[TaskController::class,'createPage'])->name('panel.CreateTaskPage');
Route::post('panel/tasks/add',[TaskController::class,'addTask'])->name('panel.addTask');

Route::get('/panel/tasks/update/{id}',[TaskController::class,'editTasks'])->name('panel.TaskEdit');
Route::post('/panel/tasks/updateTasks',[TaskController::class,'updateTasks'])->name('panel.TaskUpdate');

Route::get('/panel/tasks/delete/{id}',[TaskController::class,'deleteTasks'])->name('panel.TaskDelete');


//KATEGORİ ROUTELARI

Route::get('/panel/categories/index',[CategoryController::class,'index'])->name('panel.categoryIndex');

Route::get('/panel/categories/create',[CategoryController::class,'createPage'])->name('panel.CreateCategoryPage');
Route::post('/panel/categories/addCategory',[CategoryController::class,'postCategory'])->name('panel.categoryAdd');

Route::get('/panel/categories/update/{id}',[CategoryController::class,'updatePage'])->name('panel.updatePage');
Route::post('/panel/categories/updateCategory',[CategoryController::class,'updateCategory'])->name('panel.updateCategory');

Route::get('/panel/categories/deleteCategory/{id}',[CategoryController::class,'deleteCategory'])->name('panel.deleteCategory');


//AGENT ROUTE

Route::get('/cyber',function(){
   return view('agent');
});


//MİDDLEWARE
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', [CategoryController::class, 'index'])->name('dashboard');
});

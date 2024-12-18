<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\todosController;

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


//homepage todo route
Route::get('/',[todosController::class, 'index'])->name("todo.home");

//create todo route
Route::get('/create', function () {
    return view('create');
})->name("todo.create");

//edit todo route
Route::get('/edit/{id}',[todosController::class,'edit'])->name("todo.edit");

//update todo route
Route::post('/update', [todosController::class,'updateData'])->name("todo.updateData");

//store todo route
Route::post('/create', [todosController::class,'store'])->name("todo.store");

//delete toto route
Route::get('/delete/{id}', [todosController::class,'delete'])->name("todo.delete");
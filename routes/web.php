<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\TodoController;



Route::get('/login', [AuthController::class, 'loginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);

Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);

Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/', function () {
    return view('welcome');
})->name('home');


// Route::get('/todos', [TodoController::class, 'index'])->name('todos.index');

// Route::get('/todos/create', [TodoController::class, 'create'])->name('todos.create');
// Route::post('/todos', [TodoController::class, 'store'])->name('todos.store'); 

// Route::delete('/todos/{todo}', [TodoController::class, 'destroy'])->name('todos.destroy');
// Route::delete('/todos/{todo}', [TodoController::class, 'destroy'])->name('todos.destroy');
// Route::patch('/todos/{todo}/status', [TodoController::class, 'updateStatus'])->name('todos.updateStatus');


Route::middleware('auth')->group(function () {
    Route::get('/todos', [TodoController::class, 'index'])->name('todos.index');
    Route::get('/todos/create', [TodoController::class, 'create'])->name('todos.create');
    Route::post('/todos', [TodoController::class, 'store'])->name('todos.store');
    Route::delete('/todos/{todo}', [TodoController::class, 'destroy'])->name('todos.destroy');
    Route::patch('/todos/{todo}/status', [TodoController::class, 'updateStatus'])->name('todos.updateStatus');
    Route::get('/todos/{todo}', [TodoController::class, 'edit'])->name('todos.edit');
    Route::patch('/todos/{todo}', [TodoController::class, 'update'])->name('todos.update');
});




Route::get('/todos/{todo}', [TodoController::class, 'edit'])->name('todos.edit');
Route::patch('/todos/{todo}', [TodoController::class, 'update'])->name('todos.update');

 
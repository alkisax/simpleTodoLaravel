<?php

use App\Http\Controllers\RandomController;
use App\Http\Controllers\TodoController;
use App\Http\Controllers\WeatherController;
use Illuminate\Support\Facades\Route;
use App\Models\Todo;

Route::get('/', function () {
    return view('welcome');
});

// Show the form
Route::get('/random', function () {
    return view('random');
});
// Handle the form submission
Route::post('/random', [RandomController::class, 'generate']);

Route::get('/todos', [TodoController::class, 'index']);
Route::post('/todos', [TodoController::class, 'store']);
Route::patch('/todos/{id}', [TodoController::class, 'update']);
Route::delete('/todos/{id}', [TodoController::class, 'destroy']);

Route::get('/todos/create', function () {
    return view('todos.create');
});

Route::get('/todos/{id}', function ($id) {
  $todo = Todo::find($id);
  return view('todos/show', ['todo' => $todo]);
});

Route::get('/todos/{id}/edit', function ($id) {
  $todo = Todo::find($id);
  return view('todos/edit', ['todo' => $todo]);
});

Route::patch('/todos/{id}/toggle', [TodoController::class, 'toggle']);

Route::get('/weather', [WeatherController::class, 'weather']);
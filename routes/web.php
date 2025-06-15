<?php

use App\Http\Controllers\RandomController;
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

Route::get('/todos', function() {
  return view('todos', [
    'todos' => Todo::all()
  ]);
});

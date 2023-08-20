<?php

use App\Http\Controllers\EventController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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

Route::get('/events', [EventController::class, 'index'])
    ->name('events.index');

    
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/tasks', [TaskController::class, 'index'])->name('tasks.index');
     Route::get('/tasks/{task}/edit', 'TaskController@edit')->name('tasks.edit');
    Route::patch('/tasks/{task}', 'TaskController@update')->name('tasks.update');
});


require __DIR__ . '/auth.php';

// skeleton for ux/ui
Route::get('/skeletons/event-post', function () {
    return view('skeletons/event-post');
});

Route::get('/skeletons/profile', function () {
    return view('skeletons/profile');
});

Route::get('/skeletons/certificate', function () {
    return view('skeletons/certificate');
});

Route::resource('/events', EventController::class);


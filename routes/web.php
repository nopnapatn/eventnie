<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TaskController;
use App\Models\Event;
use App\Models\User;
use Illuminate\Support\Facades\Gate;
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

Route::get('/', [EventController::class, 'welcome']);
// Route::get('/', function () {
//     return view('/admin/index');
// });

// Route::get('/', function () {
//     if (Gate::allows('isAdmin', auth()->user())) {
//         return view('/admin/index');
//     } else {
//         return view('welcome'); // Or your regular homepage
//     }
// });

// Route::get('/', function () {
//     $events = Event::all();
//     $users = User::all();
//     return view('admin.index', compact('events', 'users'));
// })->name('admin.index');


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
    Route::put('/tasks',  [TaskController::class, 'edit'])->name('tasks.edit');
    Route::patch('/tasks',  [TaskController::class, 'update'])->name('tasks.update');
    Route::patch('/tasks', [TaskController::class, 'updatePosition'])->name('tasks.updatePosition');
});

require __DIR__ . '/auth.php';

Route::resource('/events', EventController::class);

// Admin

// add permission
Route::get(
    '/admin/grant-permission',
    [AdminController::class, 'showGrantPermissionForm']
)->name('admin.grant_permission');

Route::put(
    '/admin/grant-permission',
    [AdminController::class, 'grantPermission']
)->name('admin.grant_permission');

// revoke permission
Route::get(
    '/admin/revoke-permission',
    [AdminController::class, 'showRevokePermissionForm']
)->name('admin.revoke_permission');

Route::put(
    '/admin/revoke-permission',
    [AdminController::class, 'revokePermission']
)->name('admin.revoke_permission');

// user
Route::get('/user', [UserController::class, 'index'])
    ->name('user.index');

Route::get('/user/edit', [UserController::class, 'edit'])
    ->name('user.edit');

Route::put('/user/edit', [UserController::class, 'update'])
    ->name('user.update');

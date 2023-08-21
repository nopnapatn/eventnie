<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CertificationController;
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

Route::get('/', [EventController::class, 'welcome'])->name('home');

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

Route::get(
    '/admin/users/{user}',
    [AdminController::class, 'showUser']
)->name('admin.show_user');

Route::put(
    '/admin/users/{user}',
    [AdminController::class, 'revokePermission2']
)->name('admin.revoke_permission2');

// ...


// user

Route::get('/user', [UserController::class, 'index'])
    ->name('user.index');

Route::get('/user/edit', [UserController::class, 'edit'])
    ->name('user.edit');

Route::put('/user/edit', [UserController::class, 'update'])
    ->name('user.update');
Route::get(
    '/admin/events/{event}',
    [AdminController::class, 'showEvent']
)->name('admin.show_event');

// join event

Route::get(
    '/events/{event}/join',
    [EventController::class, 'showJoinEventForm']
)->name('events.join');

Route::post(
    '/events/{event}/join',
    [
        EventController::class, 'joinEvent'
    ]
)->name('event.join');

// attended events

Route::get(
    '/user-events',
    [EventController::class, 'userEvents']
)->name('events.user_events');

// my created events

Route::get(
    '/my-events',
    [EventController::class, 'myEvents']
)->name('events.my_events');

// staff

Route::get(
    '/staff/{event}/staff-members', 
    [EventController::class, 'showStaffMembers'])
->name('staff.staffMembers');

Route::post(
    '/staff/{event}/add-staff-member', 
    [EventController::class, 'addStaffMember'])
->name('staff.addStaffMember');

// Route::delete(
//     '/staff/{event}/remove-staff-member', 
//     [EventController::class, 'removeStaffMember']);

Route::get(
    '/staff', 
    [EventController::class, 'showStaffEvents'])
->name('staff.staffEvents');

// certification

Route::get(
    '/certifications', 
    [CertificationController::class, 'showCertifications'])
->name('certifications.show');


Route::post(
    '/certifications/upload', 
    [CertificationController::class, 'uploadCertificate'])
->name('certifications.upload');

// for downloading the certificate

Route::get(
    '/certifications/download/{certificate}', 
    [CertificationController::class, 'download'])
->name('certifications.download');

// expenses

Route::get(
    '/events/{event}/expenses/upload', 
    [EventController::class, 'showExpenseUploadView'])
->name('events.expenses.upload');

Route::post(
    '/events/{event}/expenses/upload', 
    [EventController::class, 'uploadExpense'])
->name('expenses.upload');

Route::get(
    '/events/download/{expense}', 
    [EventController::class, 'downloadExpense'])
->name('expenses.download');

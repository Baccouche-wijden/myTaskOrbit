<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\ProjectController;

use Symfony\Component\HttpKernel\Profiler\Profile;

use App\Models\Project;
use App\Models\User;
use App\Models\Task;
use App\Models\Meet;


Route::get('/', function () {
    return view('herosection');
});
Route::get('/dashboard', [TaskController::class, 'dashboard'])->name('dashboard');

// Dashboard Route
// Route::get('/dashboard', function () {

//     return view('myDashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Authenticated Routes
Route::middleware('auth')->group(function () {
    // Profile Routes
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Show all profiles
    Route::get('/profiles', function () {
        $users = User::all(); // Retrieve all users from the database
        return view('profile.profiles', ['users' => $users]);
    })->name('profiles.show');

    // Task Routes
    Route::post('/task', [TaskController::class, 'add'])->name('task.add');
    Route::get('/addtask', [TaskController::class, 'index'])->name('task');
    Route::get('/taskAssign', [ProjectController::class, 'formTasks'])->name('task');
    Route::get('/task', [TaskController::class, 'showTask'])->name('tasks.showTask');
    Route::resource('tasks', TaskController::class)->middleware('auth');


    Route::get('/projects/assign', [ProjectController::class, 'assignForm'])->name('projects.assign.form');
    // Project Routes
    Route::post('/project', [ProjectController::class, 'add'])->name('project.add');
    Route::get('/addproject', [ProjectController::class, 'index'])->name('project');
    Route::resource('projects', ProjectController::class)->middleware('auth');

    // Project Assignment Routes

    Route::post('/projects/assign/post', [ProjectController::class, 'assign'])->name('projects.assign');
});

// Route to show all projects
Route::get('/showProject', [ProjectController::class, 'show'])->name('projects.showProject');


// web.php

Route::post('/tasks/{id}/rate', [TaskController::class, 'rateTask'])->name('tasks.rate');
Route::post('/tasks/update-rating', [TaskController::class, 'updateRating'])->name('tasks.updateRating');

// routes/web.php

Route::middleware('auth')->group(function () {
    Route::get('projects/{project}/edit', [ProjectController::class, 'edit'])->name('projects.edit');
    Route::put('projects/{project}', [ProjectController::class, 'update'])->name('projects.update');
    Route::delete('projects/{project}', [ProjectController::class, 'destroy'])->name('projects.destroy');

});

Route::get('/search-users', [ProfileController::class, 'search'])->name('search.users');

//kanban
Route::get('/kanban', [TaskController::class, 'kanban'])->name('tasks.kanban');

//adminSpace
Route::get('/adminSpace', [TaskController::class, 'adminSpace'])->name('tasks.adminSpace');
Route::post('/adminSpaceAdd', [TaskController::class, 'addMeet'])->name('adminSpace.meet');



require __DIR__.'/auth.php';


<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\PasswordRecoveryController;
use App\Http\Controllers\Client\ClientController;
use App\Http\Controllers\Client\ClientProjectController;
use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\Organization\OrganizationClientController;
use App\Http\Controllers\Organization\OrganizationController;
use App\Http\Controllers\Organization\OrganizationProjectController;
use App\Http\Controllers\Project\ProjectController;
use App\Http\Controllers\Project\ProjectTaskController;
use App\Http\Controllers\Role\RoleAbilityController;
use App\Http\Controllers\Role\RoleController;
use App\Http\Controllers\Role\RoleUserController;
use App\Http\Controllers\Task\TaskController;
use App\Http\Controllers\User\UserController;
use App\Http\Controllers\User\UserProjectController;
use App\Http\Controllers\User\UserTaskController;
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

Route::redirect('/', 'login');
//Route::redirect('/home', 'login_page');

Route::view('login','auth.login')->name('login-page');
Route::post('login', [LoginController::class, 'login'])->name('login');
Route::post('logout', [LoginController::class, 'logout'])->name('logout');
Route::view('forgot-password', 'auth.forgot-password')->name('forgot-password');
Route::post('send-recovery-link', [PasswordRecoveryController::class, 'SendRecoveryLink'])->name('send-recovery-link');
Route::view('password.reset', 'password-reset');

Route::middleware('auth')->group(function(){
    Route::resource('users', UserController::class);
    Route::resource('users.projects', UserProjectController::class)->only(['index']);
    Route::resource('users.tasks', UserTaskController::class)->only(['index']);

    Route::resource('organizations', OrganizationController::class);
    Route::resource('organizations.clients', OrganizationClientController::class)->only(['index']);
    Route::resource('organizations.projects', OrganizationProjectController::class)->only(['index']);


    Route::resource('clients', ClientController::class);
    Route::resource('clients.projects', ClientProjectController::class)->only(['index']);

    Route::resource('projects', ProjectController::class);
    Route::resource('projects.tasks', ProjectTaskController::class)->only(['index']);

    Route::resource('tasks', TaskController::class);

    Route::resource('roles', RoleController::class);
    Route::resource('roles.abilities', RoleAbilityController::class)->only(['index']);
    Route::resource('roles.users', RoleUserController::class)->only(['index']);

    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
});

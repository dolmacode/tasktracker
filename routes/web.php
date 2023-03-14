<?php

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

use App\Http\Controllers\PageController;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\TaskController;

// Page Views
Route::get('/', [PageController::class, 'index'])
    ->name('page.index');
Route::get('/login', [PageController::class, 'login'])
    ->name('page.login');
Route::get('/signup', [PageController::class, 'signup'])
    ->name('page.signup');
Route::get('/forgot/mail', [PageController::class, 'forgot_a'])
    ->name('page.forgot_a');
Route::get('/forgot/reset', [PageController::class, 'forgot_b'])
    ->name('page.forgot_b');
Route::get('/projects', [PageController::class, 'projects'])
    ->name('page.projects');
Route::get('/coworkers', [PageController::class, 'coworkers'])
    ->name('page.coworkers');
Route::get('/board/{uniq_id}', [PageController::class, 'board_view'])
    ->name('page.board');
Route::get('/profile', [PageController::class, 'account'])
    ->name('page.profile');
Route::get('/settings', [PageController::class, 'settings'])
    ->name('page.settings');

// Log out from account
Route::get('/logout', [AccountController::class, 'logout'])
    ->name('auth.logout');

// Auth
Route::post('/login/render', [AccountController::class, 'login'])
    ->name('auth.login');
Route::post('/signup/render', [AccountController::class, 'signup'])
    ->name('auth.signup');
Route::post('/forgot/mail/render', [AccountController::class, 'forgot_a'])
    ->name('auth.forgot_a');
Route::post('/forgot/reset/render', [AccountController::class, 'forgot_b'])
    ->name('auth.forgot_b');

// Board
Route::post('/board/create', App\Http\Controllers\BoardController::class)
    ->name('board.create');

// Company
Route::post('/company/create', \App\Http\Controllers\CompanyController::class)
    ->name('company.create');

// Project
Route::post('/project/create', \App\Http\Controllers\ProjectController::class)
    ->name('project.create');

// Task
Route::post('/task/create', [TaskController::class, 'create'])
    ->name('task.create');
Route::post('/task/remove', [TaskController::class, 'remove'])
    ->name('task.remove');
Route::post('/task/edit', [TaskController::class, 'edit'])
    ->name('task.edit');
Route::get('/task/view', [TaskController::class, 'view'])
    ->name('task.view');
<?php

use App\Http\Controllers\Category\CategoryController;
use App\Http\Controllers\Courses\CourseController;
use App\Http\Controllers\Courses\CoursesDetailController;
use App\Http\Controllers\Jobs\JobsController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [WelcomeController::class, 'index']);

Route::get('/category', [CategoryController::class, 'index']);
Route::get('/course/{id}', [CourseController::class, 'index']);
Route::get('/course/preview/{id}', [CourseController::class, 'preview']);

Route::get('/course/detail/{id}',[CoursesDetailController::class, 'index'])->name('detail');
Route::get('/jobs', [JobsController::class, 'index']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::patch('/course-status/{nextId}/{prevId}', [CoursesDetailController::class, 'statusUpdate']);

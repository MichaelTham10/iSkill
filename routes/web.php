<?php

use App\Http\Controllers\Cart\CartController;
use App\Http\Controllers\Category\CategoryController;
use App\Http\Controllers\Courses\CourseController;
use App\Http\Controllers\Courses\CoursesDetailController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Jobs\JobsController;
use App\Http\Controllers\Order\OrderController;
use App\Http\Controllers\WelcomeController;
use App\Models\Courses;
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
Route::get('/course/preview/{id}', [CourseController::class, 'preview'])->middleware('auth');

Route::get('/course/detail/{id}',[CoursesDetailController::class, 'index'])->name('detail')->middleware('auth');;

Route::get('/jobs', [JobsController::class, 'index']);

Route::get('/mycart', [CartController::class, 'index']);

Route::get('/dashboard', [DashboardController::class, 'index']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::post('/cart/{id}', [CartController::class, 'store']);
Route::post('/order', [OrderController::class, 'store']);
Route::patch('/course-status/{nextId}/{prevId}', [CoursesDetailController::class, 'statusUpdate']);
Route::patch('/next-btn/{id}', [CoursesDetailController::class, 'nextCourse']);


// Admin

Route::get('/add-course', [CourseController::class, 'create'])->middleware('admin');
Route::get('/add-category', [CategoryController::class, 'create'])->middleware('admin');
Route::get('/manage-course', [CourseController::class, 'manageCourse'])->middleware('admin');
Route::post('/store-course', [CourseController::class, 'store'])->middleware('admin');
Route::post('/store-category', [CategoryController::class, 'store'])->middleware('admin');
Route::post('/store-detail', [CoursesDetailController::class, 'store'])->middleware('admin');
Route::get('/managing-courses/{category_id}', [CourseController::class, 'manage'])->middleware('admin');
Route::get('/managing-detail/{course_id}', [CoursesDetailController::class, 'manage'])->middleware('admin');
Route::get('/update-detail/{detail_id}', [CoursesDetailController::class, 'edit'])->middleware('admin');
Route::patch('/patch-detail/{detail_id}', [CoursesDetailController::class, 'update'])->middleware('admin');
Route::get('/update-course/{course_id}', [CourseController::class, 'edit'])->middleware('admin');
Route::patch('/patch-course/{course_id}', [CourseController::class, 'update'])->middleware('admin');
Route::delete('/delete-course/{course_id}', [CourseController::class, 'destroy'])->middleware('admin');
Route::get('/update-category/{category_id}', [CategoryController::class, 'edit'])->middleware('admin');
Route::patch('/patch-category/{category_id}', [CategoryController::class, 'update'])->middleware('admin');
Route::delete('/delete-category/{category_id}', [CategoryController::class, 'destroy'])->middleware('admin');


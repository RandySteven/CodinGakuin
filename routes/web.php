<?php

use App\Http\Controllers\CourseController;
use App\Http\Controllers\SubjectController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware('auth')->group(function(){
    Route::prefix('courses')->group(function(){
        Route::get('', [CourseController::class, 'index'])->name('courses.index');
        Route::get('create', [CourseController::class, 'create'])->name('course.create');
        Route::post('create', [CourseController::class, 'store'])->name('course.store');
        Route::get('show/{course:slug}', [CourseController::class, 'show'])->name('course.show');

        Route::get('/create-subject/', [SubjectController::class, 'create'])->name('subject.create');
    });
});

Auth::routes();

Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');


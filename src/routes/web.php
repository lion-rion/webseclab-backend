<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StageController;
use App\Http\Controllers\CourseController;
use Illuminate\Http\Request;


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


// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

Route::get('/', function () {
    return view('index');
});

Route::get('/courses', [CourseController::class, 'index'])->name('courses');

Route::get('/help', function () {
    return view('help.index');
})->name('help');

Route::get('/contact', function () {
    return view('contact.index');
})->name('contact');

//コース設定
Route::get('/courses/{course}/{stage}', [StageController::class, 'detail'])->middleware(['auth']);

//Route::get('/courses/{course}/{stage}', [CourseController::class, 'detail'])->middleware(['auth'])->middleware('clear');

Route::post('/courses/{course}/{stage}/check', [StageController::class, 'check']);

require __DIR__.'/auth.php';

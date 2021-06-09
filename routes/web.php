<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\DayController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HabitController;
use App\Http\Controllers\ProfileController;
use App\Models\User;
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

Route::get('/', function () {
    return view('about');
});

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('/habits', HabitController::class);
Route::patch('/habits/{habit}/days/{day}', [DayController::class, 'update']);
Route::get('/profile', [ProfileController::class, 'index']);
Route::patch('/profile', [ProfileController::class, 'update']);

// Admin Page

Route::get('/dbadmin/show/users/', [AdminController::class, 'index']);
Route::get('/dbadmin/show/habits/', [AdminController::class, 'allHabits']);
Route::get('/dbadmin/show/habits/{id}', [AdminController::class, 'show']);

Route::get('/{id}', function ($id) {return view('about');}); // if url not found return to about



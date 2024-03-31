<?php

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\GameController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PlayerController;
use App\Http\Controllers\ResultController;
use App\Http\Controllers\TeamListController;
use App\Http\Controllers\CourseListController;

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
Route::get('/', HomeController::class)->name('home');
Route::resource('courses', CourseController::class);
Route::resource('teams', TeamController::class);
Route::post('teams/results', [TeamController::class, 'storeResults'])->name('teams.storeResults');
Route::resource('categories', CategoryController::class);
Route::resource('players', PlayerController::class);
Route::resource('games', GameController::class);
Route::resource('results', ResultController::class);
Route::get('contactUs', [ContactUsController::class,'index'])->name('contactUs.index');
Route::post('contactUs', [ContactUsController::class,'store'])->name('contactUs.store');
//Route::get('all', [TeamListController::class,'all'])->name('all');
Route::get('all', [CourseListController::class,'all'])->name('courses.all');


Route::view('sites','sites')->name('sites');
Route::view('about','about')->name('about');
Route::view('ourteam','ourteam')->name('ourteam');
Route::view('levi','levi')->name('levi');
Route::view('levivideo','levivideo')->name('levivideo');
Route::view('pau','pau')->name('pau');
Route::view('pauvideo','pauvideo')->name('pauvideo');
Route::view('plans','plans')->name('plans');



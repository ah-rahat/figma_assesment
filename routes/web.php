<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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
Route::get('/signup',[UserController::class,'signup'])->name('signup');
Route::post('/user/store',[UserController::class,'userStore'])->name('userStore');
Route::post('/signin',[UserController::class,'signin'])->name('signin');

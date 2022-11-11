<?php

use App\Http\Controllers\MainController;
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

//Default Route
Route::get('/', function () {
    return view('users.signin');
})->name('signin');

Route::post('/users/save', [MainController::class, 'save'])->name('save');
Route::post('/users/check', [MainController::class, 'check'])->name('check');


Route::get('/users/logout', [MainController::class, 'logout'])->name('logout');



Route::group(['middleware' => ['AuthCheck']], function () {
    Route::get('/users/signin', [MainController::class, 'login'])->name('signin');
    Route::get('/users/signup', [MainController::class, 'register'])->name('signup');

    Route::get('/admin/dashboard', [MainController::class, 'dashboard']);
});

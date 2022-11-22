<?php

// use App\Http\Controllers\MainController;
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
    return view('layout.landing');
})->name('landing');

Route::get('/layout/dashboard', function(){
    return view('layout.dashboard');
})->name('dashboard');

Route::get('/users/signin', function(){
    return view('users.signin');
})->name('signin');

Route::get('/users/signup', function(){
    return view('users.signup');
})->name('signup');

Route::get('/layout/category', function(){
    return view('layout.category');
})->name('category');

Route::get('/layout/slot', function(){
    return view('layout.slot');
})->name('slot');

Route::get('/layout/parking', function(){
    return view('layout.parking');
})->name('parking');

// Route::post('/users/save', [MainController::class, 'save'])->name('save');
// Route::post('/users/check', [MainController::class, 'check'])->name('check');


// Route::get('/users/logout', [MainController::class, 'logout'])->name('logout');



// Route::group(['middleware' => ['AuthCheck']], function () {
//     Route::get('/users/signin', [MainController::class, 'login'])->name('signin');
//     Route::get('/users/signup', [MainController::class, 'register'])->name('signup');

//     Route::get('/admin/dashboard', [MainController::class, 'dashboard'])->name('dashboard');
//     Route::get('/users/users', [MainController::class, 'users'])->name('users');
//     Route::get('/layout/slot', [MainController::class, 'slot'])->name('slot');
//     Route::get('/layout/landing', [MainController::class, 'landing'])->name('landing');
// });

<?php

// use App\Http\Controllers\MainController;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\ParkslotController;

//Default Route
Route::get('/', function () {
    return view('users.login');
})->name('login');

// Custom Auth
Route::post('/users/save', [CustomAuthController::class, 'save'])->name('save');
Route::post('/users/check', [CustomAuthController::class, 'check'])->name('check');
Route::get('/users/logout', [CustomAuthController::class, 'logout'])->name('logout');

Route::group(['middleware' => ['AuthCheck']], function () {
    Route::get('/users/login', [CustomAuthController::class, 'signin'])->name('login');
    Route::get('/users/register', [CustomAuthController::class, 'signup'])->name('register');

    Route::get('/layout/dashboard', [CustomAuthController::class, 'dashboard'])->name('dashboard');
    Route::get('/layout/parking', [CustomAuthController::class, 'parking'])->name('parking');
    // Route::get('/layout/transaction', [CustomAuthController::class, 'transaction'])->name('transaction');
    Route::get('/users/users', [CustomAuthController::class, 'users'])->name('users');

    Route::get('/layout/transaction', function () {
        return view('layout.transaction');
    })->name('transaction');

    Route::get('/layout/users', function () {
        return view('layout.users');
    })->name('user');

    Route::get('/admin/manage', function () {
        return view('admin.manage');
    })->name('manage');

    Route::get('/admin/category', function () {
        return view('admin.category');
    })->name('category');

    // Pass Data to another View
    Route::get('/layout/parking', 'App\Http\Controllers\ParkslotController@getSlot')->name('parking');
    Route::get('/layout/dashboard', 'App\Http\Controllers\ParkslotController@totalSlot')->name('dashboard');
    Route::get('/admin/admindash', 'App\Http\Controllers\ParkslotController@totalSlot2')->name('admindash');
    // Pass Data to another View

    // Store And Retrieve DB
    Route::post('insert-slot', 'App\Http\Controllers\ParkslotController@insert');
    Route::get('/admin/parkslot', [App\Http\Controllers\ParkslotController::class, 'index'])->name('parkslot');
    // Store And Retrieve DB
});
// Custom Auth

// Admin Routes

Route::middleware(['auth', 'isAdmin'])->group(function () {
    Route::get('/admin', function () {
        return view('admin.admindash');
    })->name('admindash');
});

// Admin Routes



// Route::get('/admin/parkslot', function(){
//     return view('admin.parkslot');
// })->name('parkslot');

// Route::get('/layout/slot', function(){
//     return view('layout.slot');
// })->name('slot');

// Route::get('/layout/parking', function(){
//     return view('layout.parking');
// })->name('parking');

// Route::get('/layout/dashboard', function(){
//     return view('layout.dashboard');
// })->name('dashboard');

// Route::get('/admin/admindash', function(){
//     return view('admin.admindash');
// })->name('admindash');

// Route::get('/layout/parking', function(){
//     return view('layout.parking');
// })->name('layoutparking');

<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('admin/InvitationCategories');
});


// Cards Routes
Route::get('/cards', function () {
    return view('admin/Cards/show');
});
Route::get('/cards/add', function () {
    return view('admin/Cards/add');
});


// Fonts Routes
Route::get('/fonts', function () {
    return view('admin/Fonts/show');
});
Route::get('/fonts/add', function () {
    return view('admin/Fonts/add');
});

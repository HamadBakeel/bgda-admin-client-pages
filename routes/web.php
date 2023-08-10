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

Route::get('/cards', function () {
    return view('admin/Cards/InvitationCards');
});
Route::get('/cards/add', function () {
    return view('admin/Cards/AddCard');
});

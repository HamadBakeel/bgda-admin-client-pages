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
Route::get('/invitations', function () {
    return view('admin/Invitations/show');
});
Route::get('/invitations/add', function () {
    return view('admin/Invitations/add');
});


// Fonts Routes
Route::get('/fonts', function () {
    return view('admin/Fonts/show');
});
Route::get('/fonts/add', function () {
    return view('admin/Fonts/add');
});



// Invited People Routes
Route::get('/invited', function () {
    return view('admin/Invited_people/show');
});
Route::get('/invited/add', function () {
    return view('admin/Invited_people/add');
});
<?php

use App\Models\Invitation;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FontController;
use App\Http\Controllers\InvitationController;
use App\Http\Controllers\ClientInvitationController;

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


// // Fonts Routes
// Route::get('/fonts', function () {
//     return view('admin/Fonts/show');
// });
// Route::get('/fonts/add', function () {
//     return view('admin/Fonts/add');
// });



// // Invited People Routes
// Route::get('/invited', function () {
//     return view('admin/Invited_people/show');
// });
// Route::get('/invited/add', function () {
//     return view('admin/Invited_people/add');
// });
Route::get('/invite', function () {
    $invitations = Invitation::where('is_active', 1)->orderByDesc('updated_at')->get();

    return view('client/invite', compact('invitations'));
});
Route::get('/bill', function () {
    return view('bill');
});
Route::get('/calendar', function () {
    return view('calendar');
});
Route::get('/reservations/create', function () {
    return view('client.reservations.create');
});

Route::post('overlay-image', [ClientInvitationController::class, 'overlayImage'])->name('overlay-image');




// Font Resource
Route::resource('fonts', FontController::class);//->except(['show','edit','update']);
Route::resource('invitations', InvitationController::class);

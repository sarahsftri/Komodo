<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TicketController;
use App\Http\Controllers\DonationController;
use App\Http\Controllers\MerchandiseController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\HistoryController;

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
    return view('layouts.homepage');
    // return view('partials.navbar_member');
});

Route::get('/login', [UserController::class, 'viewLoginPage']);
Route::post('/login', [UserController::class, 'login']);
Route::get('/register', [UserController::class, 'viewRegisterPage']);
Route::post('/register', [UserController::class, 'register']);
Route::get('/logout', [UserController::class, 'logout']);
Route::get('/profile', [UserController::class, 'viewProfilePage'])->middleware('admin', 'member');
// Route::patch('/edit-profile', [UserController::class, 'editProfile'])->middleware('admin', 'member');

Route::get('/ticket', [TicketController::class, 'viewTicketPage'])->middleware('member');
// Route::post('/ticket', [TicketController::class, 'purchaseTicket'])->middleware('member');


// Route::get('/merchandise', [MerchandiseController::class, 'viewMerchandisePage']);
Route::post('/merchandise/{merchandise_id}', [MerchandiseController::class, 'addToCart'])->middleware('member');
Route::get('/insert-merchandise', [MerchandiseController::class, 'insertMerchPage'])->middleware('admin');
Route::post('/insert-merchandise', [MerchandiseController::class, 'insertMerchandise'])->middleware('admin');
Route::get('/update-merchandise/{merchandise_id}', [MerchandiseController::class, 'updateMerchPage'])->middleware('admin');
Route::patch('/update-merchandise/{merchandise_id}', [MerchandiseController::class, 'updateMerchandise'])->middleware('admin');
Route::delete('/delete-merchandise/{merchandise_id}', [MerchandiseController::class, 'removeMerchandise'])->middleware('admin');

Route::get('/cart', [CartController::class, 'viewCartPage'])->middleware('member');

Route::get('/donation', [DonationController::class, 'viewDonationPage'])->middleware('member');

Route::get('/cart', function () {
    return view('registered.cart');
});

Route::get('/merchandise', function () {
    return view('layouts.merchandise');
});

Route::get('/profile', function () {
    return view('registered.profile');
});

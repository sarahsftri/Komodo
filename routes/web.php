<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TicketController;

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
    return view('layouts.master');
});

Route::get('/login', [UserController::class, 'viewLoginPage']);
Route::post('/login', [UserController::class, 'login']);
Route::get('/register', [UserController::class, 'viewRegisterPage']);
Route::post('/register', [UserController::class, 'register']);
Route::get('/logout', [UserController::class, 'logout']);
Route::get('/profile', [UserController::class, 'viewProfilePage'])->middleware('admin', 'member');
Route::patch('/edit-profile', [UserController::class, 'editProfile'])->middleware('admin', 'member');

Route::get('/ticket', [TicketController::class, 'viewTicketPage'])->middleware('member');
Route::post('/ticket', [TicketController::class, 'purchaseTicket'])->middleware('member');


Route::get('/merchandise', [MerchandiseController::class, 'viewMerchandisePage'])->middleware('admin', 'member');
Route::post('/merchandise/{merchandise_id}', [MerchandiseController::class, 'addToCart'])->middleware('member');

<?php

use App\Http\Controllers\MessageController;
use App\Http\Controllers\TicketController;
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

Route::get('/tickets', [TicketController::class, 'index'])->name('tickets.index');
Route::get('/messages', [MessageController::class, 'index'])->name('messages.index');

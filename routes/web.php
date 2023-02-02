<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ManageAccountController;
use App\Http\Controllers\RegistratController;
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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/user-login', [AuthController::class, 'index'])->name('user.login');
Route::post('/user-login', [AuthController::class, 'login'])->name('user.login');
Route::get('/user-registrar', [RegistratController::class, 'index'])->name('user.registrar');
Route::post('/user-create', [RegistratController::class, 'store'])->name('user.store');

Route::middleware('LoggedIn')->group( function(){
    Route::get('/with-draw',[ManageAccountController::class, 'index'])->name('with.draw.form');
    Route::post('/with-draw', [ManageAccountController::class, 'withDrawMoney'])->name('with.draw.money');
    Route::get('/check-balance', [ManageAccountController::class, 'CheckBalance'])->name('check.balance');
});




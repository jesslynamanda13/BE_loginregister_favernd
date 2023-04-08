<?php

use App\Http\Controllers\SessionCtrl;
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

Route::get('/', [SessionCtrl::class, 'home']);
Route::get('/sign_in', [SessionCtrl::class, 'sign_in']);
Route::get('/register', [SessionCtrl::class, 'register']);

Route::post('/create', [SessionCtrl::class, 'create']);
Route::post('/loginData', [SessionCtrl::class, 'loginData']);
Route::get('/dashboard', [SessionCtrl::class, 'dash'])->middleware('isAdmin');
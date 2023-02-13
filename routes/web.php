<?php

use App\Http\Controllers\RiotAuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\RiotLoadoutController;
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

// public route
Route::get('/', [RiotAuthController::class, 'login'])->name('/')->middleware('guest');
Route::get('about', function () { return view('pages.about'); })->name('about');
Route::get('login', [RiotAuthController::class, 'login'])->name('login')->middleware('guest');
//Route::get('mfa', [RiotAuthController::class, 'mfa'])->middleware('guest');;



Route::get('test', function () { return view('pages.test'); })->name('test');


// auth routes
Route::group(['middleware' => ['web']], function () {
    Route::post('auth', [RiotAuthController::class, 'auth'])->name('auth');
    Route::get('mfa', [RiotAuthController::class, 'mfa']);
});

//logged in only routes
Route::middleware('user')->group(function () {
    Route::post('loadout/update', [RiotLoadoutController::class, 'loadoutUpdate'])->name('loadout-update');

    Route::get('dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');
    Route::get('store', [DashboardController::class, 'store'])->name('store');
    Route::get('bundle', [DashboardController::class, 'bundle'])->name('bundle');
    Route::get('info/{id}', [DashboardController::class, 'info'])->name('skin-info');
    Route::get('match/{id}', [DashboardController::class, 'matchInfo'])->name('match-info');
    Route::get('player/{id}', [DashboardController::class, 'playerInfo'])->name('player-info');
    Route::get('matches', [DashboardController::class, 'matchHistory'])->name('match-history');
    Route::get('loadout', [DashboardController::class, 'loadout'])->name('loadout');
    Route::get('logout', [RiotAuthController::class, 'logout'])->name('logout');
});




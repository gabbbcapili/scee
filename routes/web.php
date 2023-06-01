<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\LandingPageController;

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

Route::get('/', [LandingPageController::class, 'index'])->name('landing.index');

Route::group(['middleware' => ['auth'], 'prefix' => 'app'], function(){
    Route::get('/', [HomeController::class, 'home'])->name('home');
});



// locale Route
Route::get('lang/{locale}', [LanguageController::class, 'swap']);
Route::get('theme/{theme}', [HomeController::class, 'setTheme'])->name('theme');



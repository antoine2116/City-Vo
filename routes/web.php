<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\RewardsController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\WelcomeController;

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

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Route::get('/', [WelcomeController::class, 'index']);

Route::get('/createPost', [WelcomeController::class, 'createPost']);

Route::get("rewards", [RewardsController::class, 'index']);

Route::get("user", [UsersController::class, 'index']);

<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\RewardsController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\MapController;

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

Route::get('/', 'LoginController@protect');

Route::get('/home/{id?}', [HomeController::class, 'index']);

Route::get('/welcome',[WelcomeController::class, 'index']);

Route::get("rewards", [RewardsController::class, 'index']);

Route::get("user", [UsersController::class, 'index']);


Route::get('/create_account', 'LoginController@index');

Route::post('/create','LoginController@create');

Route::get('/login', 'LoginController@login');

Route::post('/check','LoginController@check_user');


Route::get('/logout','LoginController@logout');

Route::get('/createPost','PostsController@index');

Route::post('/createAPost','PostsController@createAPost');

Route::get("/comments", "PostsController@comments");

Route::post("/homeToComments", "PostsController@homeToComments");
Route::post("/home/homeToComments", "PostsController@homeToComments");

Route::post("/updateProfil", [UsersController::class, 'updateProfil']);

Route::post("/addComment", "PostsController@addComment");

Route::get("map", [MapController::class, 'index']);
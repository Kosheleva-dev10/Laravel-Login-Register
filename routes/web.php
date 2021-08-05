<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;
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

Route::post('/login', ['as'=>'login', 'uses'=>'App\Http\Controllers\UsersController@login']);
Route::post('/register', [UsersController::class, 'register']);

Route::get('/dashboard', function () {
    return view('dashboard');
});


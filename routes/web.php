<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Users;
use App\Http\Controllers\Login;

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

    // # How to redirect 
    // return redirect('/about');
});
Route::get('/hello/{name}', function($name) {
    return view('hello', ['name' => $name]);
});

Route::view('about', 'about')->middleware('protectedPage');
Route::get('/users', [Users::class, 'index']);
Route::get('/users/{name}', [Users::class, 'index']);

Route::view('login', 'login');
Route::post('/saveLogin', [Login::class, 'login']);

Route::view('noaccess', 'noaccess');

// Route::group(['middleware' => ['protectedPage']], function() {
//     Route::view('about', 'about');
//     Route::get('/users', [Users::class, 'index']);
//     Route::get('/users/{name}', [Users::class, 'index']);
// });

Route::get('/getAllUsers', [Users::class, 'getAllUsers']);
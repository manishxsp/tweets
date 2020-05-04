<?php

//DB::listen(function ($query) { var_dump($query->sql, $query->bindings);});

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

Route::middleware('auth')->group(function () {

route::get('/tweets','TweetsController@index')->name('home');

route::post('/tweets','TweetsController@store');


});


route::get('/profiles/{user}','ProfilesController@show')->name('profile');



Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');

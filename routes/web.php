<?php

use App\Calculator\Calculator;
use App\Providers\Book;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;

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

//Route::get('/calculator', 'CalculatorController@calculate');
//Route::get('/calculator/detail', 'CalculatorComeontroller@detail');
//
//
//Route::get('/user', function () {
//    return User::all();
//});
//
//Route::get('/user/{id}', function (Request $request) {
//    return User::find($request->route('id'));
//});
//
//Route::post('/user', function (Request $request) {
//    $newUser = new User($request->all());
//    $newUser->save();
//
//    return $newUser;
//});

Route::get('/books', 'BookController@index')->name('get-book');
Route::post('/post-book', 'BookController@store')->name('post-book');


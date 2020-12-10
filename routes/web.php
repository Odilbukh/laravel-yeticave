<?php

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
    return view('index');
})->name('index');

Route::get('/404', function () {
    return view('404');
})->name('404');

Route::get('/add-lot', function () {
    return view('add-lot');
})->name('add-lot');;

//Route::get('/all-lots', function () {
//    return view('all-lots');
//})->name('all-lots');

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/lot', function () {
    return view('lot');
})->name('lot');

Route::get('/my-bets', function () {
    return view('my-bets');
})->name('my-bets');;

Route::get('/search', function () {
    return view('search');
})->name('search');;

Route::get('/sign-up', function () {
    return view('sign-up');
})->name('sign-up');

Route::post('sign-up/register', 'FormController@register')->name('register');

Route::post('login/log', 'FormController@login')->name('login/log');

Route::post('add/bet', 'FormController@addBet')->name('add/bet');

Route::post('add-lot/add', 'FormController@addLot')->name('add-lot/add');

Route::get('all-lots','FormController@allLots')->name('all-lots');

Route::get('/lot/{id}','FormController@lot')->name('lot');

Route::get('/navigation', 'FormController@navigate')->name('navigation');



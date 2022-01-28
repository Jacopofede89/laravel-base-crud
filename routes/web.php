<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'HomeController@home') ->name('home');
Route::get('/comic/detail/{id}', 'HomeController@detail') ->name('detail');
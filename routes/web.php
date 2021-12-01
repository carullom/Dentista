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

Route::get('/', 'FrontendController@home')->name('home');

Route::get('/chi-siamo', 'FrontendController@chisiamo')->name('chisiamo');

Route::get('/cosa-facciamo', 'FrontendController@cosafacciamo')->name('cosafacciamo');

Route::get('/macchinari', 'FrontendController@macchinari')->name('macchinari');

Route::get('/contatti', 'FrontendController@contatti')->name('contatti');

Route::post('/contatti/submit', 'FrontendController@submit')->name('submit');

Route::get('/thankyou', 'FrontendController@thankyou')->name('thankyou');


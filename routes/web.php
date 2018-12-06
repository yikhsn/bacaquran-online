<?php

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

/**
 * Controller for main page like home etc
 */
Route::get('/', 'MainController@index')->name('home');

Route::get('/surat', 'MainController@read');

/**
 * Controller for Surat like single surat page and etc
 */
Route::get('/surat/{nomor_surat}', 'SuratController@show');



/**
 * Controller for Surat like single surat page and etc
 */
Route::get('/surat/{nomor_surat}/ayat/{nomor_ayat}', 'AyatController@show');


/**
 * Controller for Surat like single surat page and etc
 */
Route::get('/juz/{nomor_juz}', 'JuzController@show');


/**
 * Route for Register Controller
 */

Route::get('/register', 'RegisterController@create');

Route::post('/register', 'RegisterController@store');


/**
 * Route for Session Controller
 */

Route::get('/login', 'SessionController@create')->name('login');

Route::post('/login', 'SessionController@store');

Route::get('/logout', 'SessionController@destroy');


/**
 * Route for hafalan controller
 */

 Route::get('/hafalan', 'HafalanController@index');

 Route::post('/hafalan/simpan', 'HafalanController@store');

//  Route::get('/test', 'HafalanController@test');

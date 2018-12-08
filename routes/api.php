<?php

use Illuminate\Http\Request;

Route::get('/surat/{nomor_surat}', 'AppController@surat');

Route::get('/surat/query/{query}', 'AppController@searchSurat');

Route::get('/ayat/{id}', 'AppController@ayat');

Route::get('/ayat/query/{query}', 'AppController@searchAyat');


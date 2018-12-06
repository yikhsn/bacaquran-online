<?php

use Illuminate\Http\Request;

Route::get('/ayat/{query}', 'AppController@ayat');

Route::get('/surat/{query}', 'AppController@surat');

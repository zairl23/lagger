<?php

Route::get(config('lagger.path'), 'Ney\Lagger\Controllers\Controller@docs');
Route::get(config('lagger.json'), 'Ney\Lagger\Controllers\Controller@json');
Route::post('users', 'Ney\Lagger\Controllers\UsersController@users');

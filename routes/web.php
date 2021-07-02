<?php

use Illuminate\Support\Facades\Route;

// https://qiita.com/tamakiiii/items/e71040173fa0a1fcad83
Route::get('/folders/{id}/tasks', 'App\Http\Controllers\TaskController@index')->name('tasks.index');

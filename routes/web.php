<?php

use Illuminate\Support\Facades\Route;
use App\Models\Folder;

// https://qiita.com/tamakiiii/items/e71040173fa0a1fcad83

Route::group(['middleware' => 'auth'], function() {
  Route::get('/', 'App\Http\Controllers\HomeController@index')->name('home');

  Route::get('/folders/create', 'App\Http\Controllers\FolderController@showCreateForm')->name('folders.create');
  Route::post('/folders/create', 'App\Http\Controllers\FolderController@create');

  Route::group(['middleware' => 'can:view,folder'], function() {
    Route::get('/folders/{folder}/tasks', 'App\Http\Controllers\TaskController@index')->name('tasks.index');

    Route::get('/folders/{folder}/tasks/create', 'App\Http\Controllers\TaskController@showCreateForm')->name('tasks.create');
    Route::post('/folders/{folder}/tasks/create', 'App\Http\Controllers\TaskController@create');
  
    Route::get('/folders/{folder}/tasks/{task}/edit', 'App\Http\Controllers\TaskController@showEditForm')->name('tasks.edit');
    Route::post('/folders/{folder}/tasks/{task}/edit', 'App\Http\Controllers\TaskController@edit');
  });
});

Auth::routes();

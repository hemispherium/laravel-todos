<?php

use Illuminate\Support\Facades\Route;

// https://qiita.com/tamakiiii/items/e71040173fa0a1fcad83

Route::get('/folders/{id}/tasks', 'App\Http\Controllers\TaskController@index')->name('tasks.index');

Route::get('/folders/create', 'App\Http\Controllers\FolderController@showCreateForm')->name('folders.create');
Route::post('/folders/create', 'App\Http\Controllers\FolderController@create');

Route::get('/folders/{id}/tasks/create', 'App\Http\Controllers\TaskController@showCreateForm')->name('tasks.create');
Route::post('/folders/{id}/tasks/create', 'App\Http\Controllers\TaskController@create');

Route::get('/folders/{id}/tasks/{task_id}/edit', 'App\Http\Controllers\TaskController@showEditForm')->name('tasks.edit');
Route::post('/folders/{id}/tasks/{task_id}/edit', 'App\Http\Controllers\TaskController@edit');

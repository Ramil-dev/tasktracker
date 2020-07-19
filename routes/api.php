<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/v1/task', 'API\TaskController@ShowList')->name('task.showlist');

Route::get('/v1/task/id{taskid}', 'API\TaskController@Show')->name('task.show');

Route::post('/v1/task/create', 'API\TaskController@Create')->name('task.create');

Route::put('/v1/task/{taskid}/edit', 'API\TaskController@Update')->name('task.update');

Route::delete('/v1/task/{taskid}', 'API\TaskController@Destroy')->name('task.destroy');



Route::post('/v1/user/create', 'API\UserController@Create')->name('user.create');

Route::put('/v1/user/{userid}/edit', 'API\UserController@Update')->name('user.update');

Route::delete('/v1/user/{userid}', 'API\UserController@Destroy')->name('user.destroy');

<?php

use Illuminate\Http\Request;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/', function () {
    return "API DE TAREAS";
});

Route::group(['prefix' => 'v1', 'middleware' => 'cors'], function () {
    // Route::resource('tasks', 'TaskController', ['except' => ['edit', 'create']]);
    Route::get('tasks', 'TaskController@index');
    Route::post('tasks', 'TaskController@TaskController@store');
    Route::get('tasks/{task}', 'TaskController@show');
    Route::put('tasks/{task}', 'TaskController@update');
    Route::delete('tasks/{task}', 'TaskController@destroy');
});
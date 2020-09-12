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
    Route::get('/', function () {
        return "Version 1 de la API";
    });

    //CRUD
    Route::get('tasks', 'TaskController@index');
    Route::post('tasks', 'TaskController@store');
    Route::get('tasks/{task}', 'TaskController@show');
    Route::put('tasks/{task}', 'TaskController@update');
    Route::delete('tasks/{task}', 'TaskController@destroy');

    //AUTENTICACIÓN
    Route::post('login', 'AuthController@login');

    Route::group(['middleware' => 'jwt.verify'], function() {
        //Rutas que requieren autenticación
        Route::post('logout', 'AuthController@logout');
        Route::post('refresh', 'AuthController@refresh');
        Route::get('me', 'AuthController@me');
    });
});

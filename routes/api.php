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

        Route::get('comments', 'CommentController@index');
        Route::post('comments', 'CommentController@store');
        Route::get('comments/{comment}', 'CommentController@show');
        Route::put('comments/{comment}', 'CommentController@update');
        Route::delete('comments/{comment}', 'CommentController@destroy');

        Route::get('posts', 'PostController@index');
        Route::post('posts', 'PostController@store');
        Route::get('posts/{post}', 'PostController@show');
        Route::post('posts/{post}', 'PostController@update');
        Route::delete('posts/{post}', 'PostController@destroy');

    });
});

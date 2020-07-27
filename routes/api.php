<?php

use Illuminate\Support\Facades\Route;

Route::apiResource('/question','QuestionController');
Route::apiResource('/category','CategoryController');
Route::apiResource('/reply','ReplyController');

Route::post('/like/{reply}','LikesController@likeIt');
Route::delete('/like/{reply}','LikesController@unLikeIt');


Route::group([

    'middleware' => 'api',
    'prefix' => 'auth'

], function ($router) {

    Route::post('login', 'AuthController@login');
    Route::post('singup', 'AuthController@singup');
    Route::post('logout', 'AuthController@logout');
    Route::post('refresh', 'AuthController@refresh');
    Route::post('me', 'AuthController@me');

});

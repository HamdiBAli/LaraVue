<?php

use Illuminate\Support\Facades\Route;

Route::apiResource('/question','QuestionController');
Route::apiResource('/category','CategoryController');
Route::apiResource('/reply','ReplyController');

Route::post('/like/{reply}','LikesController@likeIt');
Route::delete('/like/{reply}','LikesController@unLikeIt');
